<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function know()
    {
        $teamMembers = [
            ['name' => 'Joel Hauer', 'role' => 'Co-founder', 'photo' => 'images/emp-photo-1.png'],
            ['name' => 'Emily Clark', 'role' => 'CEO', 'photo' => 'images/emp-photo-2.png'],
            ['name' => 'Michael Lee', 'role' => 'Manager', 'photo' => 'images/emp-photo-3.png'],
            ['name' => 'Sarah Brown', 'role' => 'Designer', 'photo' => 'images/emp-photo-4.png'],
        ];

        return view('home.know', compact('teamMembers'));
    }
    public function service()
    {
        $services = [
            [
                'icon' => 'images/expert.svg',
                'title' => 'Expert Guidance',
                'description' => 'Our team of certified consultants has extensive knowledge of Australian universities, their admission processes, and program requirements. We provide students with clear, reliable advice to help them make informed decisions.',
            ],
            [
                'icon' => 'images/personalize.svg',
                'title' => 'Personalized Solutions',
                'description' => 'We understand that every student is unique. That’s why we craft tailored solutions based on individual academic goals, interests, and career ambitions, ensuring a perfect match with the right institution and course.',
            ],
            [
                'icon' => 'images/university.svg',
                'title' => 'Comprehensive University Insights',
                'description' => 'With a deep understanding of Australian universities, we provide detailed information about programs, scholarships, entry requirements, and campus life, so students are fully prepared for their new journey.',
            ],
            [
                'icon' => 'images/seamless.svg',
                'title' => 'Seamless Application Assistance',
                'description' => 'From filling out applications to writing statements of purpose, our experts guide students step by step, ensuring a smooth and stress-free process. We also help with visa applications and compliance support for international students.',
            ],
            [
                'icon' => 'images/career.svg',
                'title' => 'Career-Oriented Approach',
                'description' => 'We don’t just focus on academics—we emphasize career pathways. Our consultants help students choose courses and institutions aligned with future career opportunities, setting them up for long-term success.',
            ],
            [
                'icon' => 'images/ongoing.svg',
                'title' => 'Ongoing Support',
                'description' => 'Our support doesn’t end with admissions. We continue to assist students during their studies with advice on internships, networking opportunities, and even post-graduation pathways like work visas and employment options.',
            ],
            [
                'icon' => 'images/trusted.svg',
                'title' => 'Trusted and Committed',
                'description' => 'As a dedicated Higher Education Consultancy, we prioritize integrity and student satisfaction. Our mission is to provide the best possible service and help students achieve their academic and professional dreams.',
            ],
        ];
        return view('home.service', compact('services'));
    }
    public function login()
    {
        return view('home.login');
    }

}
