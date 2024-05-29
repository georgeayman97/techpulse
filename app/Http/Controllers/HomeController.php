<?php

namespace App\Http\Controllers;

use App\Enum\ResponseMessage;
use App\Http\Requests\StoreFollowerRequest;
use App\Services\GetHomeService;
use App\Services\StoreFollowerService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @param GetHomeService $getHomeService
     * @param StoreFollowerService $followerService
     */
    public function __construct(
        private readonly GetHomeService $getHomeService,
        private readonly StoreFollowerService $followerService,
    ) {
    }

    /**
     * @return View|Application|Factory
     */
    public function index(): View|Application|Factory
    {
        $getHomeService = $this->getHomeService->execute();

        return view('main', [
            'categories' => $getHomeService->getCategories()
        ]);
    }

    /**
     * @param StoreFollowerRequest $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function storeFollower(StoreFollowerRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->followerService->setData($request->only('email'))->execute();
            DB::commit();
            return redirect()->route('home');
//            return (new WebSuccessResponse(
//                message: ResponseMessage::SENT_SUCCESSFULLY->getMessage(), hasRedirect: true
//            ))->toResponse();
        } catch (Exception $exception) {
            DB::rollBack();
            throw new Exception(ResponseMessage::SOMETHING_WENT_WRONG->getMessage());
        }
    }
}
