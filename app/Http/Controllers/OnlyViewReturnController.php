<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlyViewReturnController extends Controller
{
    public function events()
    {
        return view('events');
    }


    public function importantlinks()
    {
        return view('important-links');
    }


    public function CodeOfConducts()
    {
        return view('code-of-conducts');
    }


    public function DressCode()
    {
        return view('dress-code');
    }


    public function LessonPlan()
    {
        return view('lesson-plan');
    }


    public function Calendar()
    {
        return view('calendar');
    }


    public function ClassRoutine()
    {
        return view('class-routine');
    }


    public function ExamRoutine()
    {
        return view('exam-routine');
    }

    public function Results()
    {
        return view('results');
    }


    public function BoysScout()
    {
        return view('boys-scout');
    }


    public function GirlsGuide()
    {
        return view('girls-guide');
    }


    public function Sports()
    {
        return view('sports');
    }


    public function CulturePractice()
    {
        return view('culture-practice');
    }


    public function NumberOfStudents()
    {
        return view('number-of-students');
    }


    public function ListOfStudents()
    {
        return view('list-of-students');
    }


    public function Teachers()
    {
        return view('teachers');
    }


    public function Employees()
    {
        return view('employees');
    }


    public function PhotoGallery()
    {
        return view('photo-gallery');
    }


    public function VideoGallery()
    {
        return view('video-gallery');
    }


    public function FormerPersons()
    {
        return view('former-persons');
    }


    public function MeritoriousStudents()
    {
        return view('meritorious-students');
    }


    public function Contact()
    {
        return view('contact');
    }






}
