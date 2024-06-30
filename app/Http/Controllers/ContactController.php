<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Services\StoreContactService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * @param StoreContactService $contactService
     */
    public function __construct(
        private readonly StoreContactService $contactService,
    ) {
    }

    /**
     * @return View|Application|Factory
     */
    public function create(): View|Application|Factory
    {
        return view('pages.contact');
    }

    /**
     * @param StoreContactRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function store(StoreContactRequest $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $this->contactService->setData(
                $request->only(
                    '_token',
                    'name',
                    'email',
                    'phone',
                    'subject',
                    'company_name',
                    'company_field',
                    'country',
                    'message'
                )
            )->execute();
            DB::commit();
            return response()->json(__("lang.Thank you for contacting us"));
        } catch (Exception $exception) {
            DB::rollBack();
            return response()->json(__("lang.Something went wrong try refresh the page"));
        }
    }
}
