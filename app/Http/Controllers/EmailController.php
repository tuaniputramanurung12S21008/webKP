<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        try {
            // Simpan email ke database (menggunakan email_address)
            $email = new Email();
            $email->email_address = 'tuanimanurung17@gmail.com'; // Email tujuan tetap
            $email->subject = $validatedData['subject'];
            $email->body = $validatedData['body'];
            $email->save(); // Simpan ke database

            // Kirim email
            Mail::raw($email->body, function ($message) use ($email) {
                $message->to($email->email_address)
                        ->subject($email->subject)
                        ->from('no-reply@yourcompany.com', 'Your Company Name'); // Pengirim email
            });

            // Jika sukses
            return response()->json(['message' => 'Email berhasil dikirim!'], 200);

        } catch (\Exception $e) {
            // Jika ada kesalahan saat mengirim email
            Log::error('Gagal mengirim email: ' . $e->getMessage());

            return response()->json(['message' => 'Gagal mengirim email, silakan coba lagi.'], 500);
        }
    }
}
