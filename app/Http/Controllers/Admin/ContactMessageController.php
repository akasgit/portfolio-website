<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(10);
        return view('admin.contact_messages.index', compact('messages'));
    }

    public function show(ContactMessage $contact)
    {

        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        return view('admin.contact_messages.show', compact('contact'));
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->route('admin.contact-messages.index')
            ->with('success', 'Message deleted successfully.');
    }
}
