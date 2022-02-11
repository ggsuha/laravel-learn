<?php

if (!function_exists('empty_object')) {
    /**
     * Return empty object response
     *
     * @param integer|null $status
     * @return \Illuminate\Http\JsonResponse
     */
    function empty_object($status = 200) {
        return response()->json(['data' => new stdClass()], $status);
    }
}