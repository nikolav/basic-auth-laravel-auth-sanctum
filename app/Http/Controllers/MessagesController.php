<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return [
            "data" => Message::all(),
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message = Message::create([
            "title" => $request->input("title"),
            "content" => $request->input("content", null),
            "author" => $request->input("author", null),
        ]);
        return [
            "data" => $message,
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
        return [
            "data" => $message,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
        $title = $request->input("title", null);
        $content = $request->input("content", null);
        $author = $request->input("author", null);

        if (null != $title) $message->title = $title;
        if (null != $content) $message->content = $content;
        if (null != $author) $message->author = $author;

        $message->save();

        return [
            "data" => $message,
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
        $message->delete();
        return [
            "data" => $message,
        ];
    }
}
