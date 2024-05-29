<?php

namespace App\Http\Controllers;

use App\Enum\ResponseMessage;
use App\Http\Requests\StoreContactRequest;
use App\Services\StoreContactService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
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
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(StoreContactRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->contactService->setData(
                $request->only('name', 'email', 'subject', 'company_name', 'company_field', 'country', 'message')
            )->execute();
            DB::commit();
            return redirect()->route('home');
        } catch (Exception $exception) {
            DB::rollBack();
            throw new Exception(ResponseMessage::SOMETHING_WENT_WRONG->getMessage());
        }
    }
}
