<?php

namespace App\Http\Controllers;

use App\Attendee;
use App\Event;
use App\Mail\EventRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.events',[
            'events' => Event::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
            'starting_date' => 'required',
            'starting_time' => 'required',
            'ending_time' => 'required',
            'ending_time' => 'required',
            'location' => 'required',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();


        $feature = $request->feature ? true : false;

        $data = $request->except(['_token']);

        $data['image'] = $imageName;
        $data['feature'] = $feature;

        Event::create($data);

        request()->image->move(public_path('images/event'), $imageName);

        return back()->with([
            'message' => 'event created successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Event $event)
    {

        $data = $request->except(['_token']);

        if ($request->has('image')) {
            $file = public_path().'/images/event/'.$event->first()->image;
            File::delete($file);

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/event'), $imageName);

            $data['image'] = $imageName;
        }

        $event->update($data);

        return back()->with([
            'message' => 'event updated',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $file = public_path().'/images/event/'.$event->image;
        File::delete($file);

        $event->delete();

        return back()->with([
            'message' => 'event deleted',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function feature($id)
    {
        $event = Event::find($id);

        if($event->first()->feature){
            $event->update(['feature' => false]);

            return back()->with([
                'message' => 'event removed from feature',
                'type' => 'success'
            ]);
        }else{
            $event->update(['feature' => true]);

            return back()->with([
                'message' => 'event featured ',
                'type' => 'success'
            ]);
        }
    }

    public function register(Request $request,$event){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required'
        ]);

        Attendee::create([
            'name' => $request->name,
            'email' => $request->email,
            'event_id' => $event
        ]);

        return back()->with([
            'message' => 'you have successfully registered for this event',
            'type' => 'success'
        ]);

    }
}
