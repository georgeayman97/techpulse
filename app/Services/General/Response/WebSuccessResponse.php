<?php

namespace App\Services\General\Response;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class WebSuccessResponse
{
    public function __construct(
        protected ?string $message,
        protected int $status = Response::HTTP_OK,
        protected bool $hasRedirect = false,
        protected ?string $url = null,
        protected ?string $file_path = null,
        protected array $headers = []
    ) {
    }

    /**
     * @return JsonResponse
     */
    public function toResponse(): JsonResponse
    {
        return response()->json([
            'hasRedirect' => $this->hasRedirect,
            'url' => $this->url,
            'message' => $this->message,
            'file_path' => $this->file_path
        ], $this->status, $this->headers);
    }
}
