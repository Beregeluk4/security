<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of FAQs.
     */
    public function index()
    {
        return view('faqs.index', [
            'faqs' => Faq::take(10)->get()
        ]);
    }

    /**
     * Show the form for creating a new FAQ.
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created FAQ in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'question' => 'required|min:10',
            'answer' => 'required|min:10',
            'link' => 'nullable|url',
        ]);

        // Create a new FAQ model object
        $faq = Faq::create($validatedData);

        // Redirect to the FAQs index page
        return Redirect::route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    /**
     * Display the specified FAQ.
     */
    public function show(Faq $faq)
    {
        return view('faqs.show', [
            'faq' => $faq
        ]);
    }

    /**
     * Show the form for editing the specified FAQ.
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', [
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified FAQ in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        // Validate the request
        $validatedData = $request->validate([
            'question' => 'required|min:10',
            'answer' => 'required|min:10',
            'link' => 'nullable|url',
        ]);

        // Update the FAQ attributes with the validated data
        $faq->update($validatedData);

        // Redirect to the FAQs show page
        return Redirect::route('faqs.show', $faq)->with('success', 'FAQ successfully updated');
    }

    /**
     * Show the form for deleting the specified FAQ.
     */
    public function delete(Faq $faq)
    {
        return view('faqs.delete', [
            'faq' => $faq
        ]);
    }

    /**
     * Remove the specified FAQ from storage.
     */
    public function destroy(Faq $faq)
    {
        // Delete the FAQ from the database
        $faq->delete();

        // Redirect to the FAQs index page
        return Redirect::route('faqs.index')->with('success', 'FAQ successfully deleted');
    }
}
