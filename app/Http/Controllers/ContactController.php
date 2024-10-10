<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    const RECIPIENT_NAME = "Bara Blasting Perkasa";
    const RECIPIENT_EMAIL = "tuanimanurung17@gmail.com";

    // Metode yang sudah ada: send
    public function send(Request $request)
    {
        // Sanitize and validate input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        $userName = preg_replace("/[^\s\S.\-_@a-zA-Z0-9]/", "", $request->input('username'));
        $senderEmail = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL);
        $senderPhone = preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $request->input('phone'));
        $userSubject = preg_replace("/[^\s\S.\-_@a-zA-Z0-9]/", "", $request->input('subject'));
        $message = preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/i", "", $request->input('message'));

        if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('contact')->with('message', 'Invalid Email');
        }

        // Prepare email
        $recipient = self::RECIPIENT_NAME . " <" . self::RECIPIENT_EMAIL . ">";
        $headers = [
            'From' => $userName . " <" . $senderEmail . ">",
            'Reply-To' => $senderEmail,
            'Content-Type' => 'text/plain; charset=UTF-8',
        ];

        $msgBody = "Name: " . $userName . "\n";
        $msgBody .= "Email: " . $senderEmail . "\n";
        $msgBody .= "Phone: " . $senderPhone . "\n";
        $msgBody .= "Subject: " . $userSubject . "\n\n";
        $msgBody .= "Message: \n" . $message . "\n";

        try {
            Mail::raw($msgBody, function ($mail) use ($recipient, $userSubject, $headers) {
                $mail->to($recipient)
                    ->subject($userSubject)
                    ->from($headers['From'])
                    ->replyTo($headers['Reply-To']);
            });

            return redirect()->route('contact')->with('message', 'Successful');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('message', 'Failed to Send');
        }
    }

    // Metode baru untuk sendEmail
    public function sendEmail(Request $request)
    {
        return $this->send($request); // Memanfaatkan logika yang sudah ada di metode send()
    }

    public function home(Request $request)
    {
        return view('index');
    }

    public function about(Request $request)
    {
        return view('about');
    }

    public function product(Request $request)
    {
        return view('product-detail');
    }

    public function contact(Request $request)
    {
        return view('contact');
    }

    public function productdetail(Request $request)
    {
        return view('product-detail');
    }
}
