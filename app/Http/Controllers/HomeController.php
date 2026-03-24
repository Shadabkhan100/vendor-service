<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title_small' => 'Automotive & Roadside Assistance',
                'title_main' => 'Fast & Reliable Vehicle Support',
                'description' => 'Instant roadside help including towing, jumpstart and emergency repair.',
                'image' => 'assets/img/services/c-1.jpeg',
                'video_link' => '#',
                'learn_more' => '#'
            ],
            [
                'title_small' => 'Home Maintenance & Plumbing',
                'title_main' => 'Professional Plumbing Solutions',
                'description' => 'Leak fixing, pipe repair and complete plumbing services by experts.',
                'image' => 'assets/img/services/c-2.jpeg',
                'video_link' => '#',
                'learn_more' => '#'
            ],
            [
                'title_small' => 'Electrical & AC Services',
                'title_main' => 'Safe Electrical Installations',
                'description' => 'AC installation, wiring repair and lighting setup services.',
                'image' => 'assets/img/services/c-3.jpg',
                'video_link' => '#',
                'learn_more' => '#'
            ],
            [
                'title_small' => 'Transport & Ride Services',
                'title_main' => 'Quick & Affordable Transport',
                'description' => 'Book taxi and transport services anytime with trusted drivers.',
                'image' => 'assets/img/services/c-4.jpg',
                'video_link' => '#',
                'learn_more' => '#'
            ],
            [
                'title_small' => 'Cleaning & Home Services',
                'title_main' => 'Premium Cleaning Services',
                'description' => 'Professional home and office cleaning solutions.',
                'image' => 'assets/img/services/c-5.jpg',
                'video_link' => '#',
                'learn_more' => '#'
            ],
            [
                'title_small' => 'Marketplace & Local Stores',
                'title_main' => 'Shop From Trusted Vendors',
                'description' => 'Buy products and services securely from verified stores.',
                'image' => 'assets/img/services/c-6.jpg',
                'video_link' => '#',
                'learn_more' => '#'
            ],
        ];
        $categories = [
            [
                'name' => 'Mechanical Service',
                'description' => 'Vehicle repair, engine maintenance and roadside assistance services.',
                'image' => 'assets/img/services/c-1.jpeg',
                'link' => '#'
            ],
            [
                'name' => 'Plumbing Service',
                'description' => 'Pipe repair, leakage fixing and installation services.',
                'image' => 'assets/img/services/c-2.jpeg',
                'link' => '#'
            ],
            [
                'name' => 'Electrical Service',
                'description' => 'Wiring, AC repair and electrical maintenance services.',
                'image' => 'assets/img/services/c-3.jpg',
                'link' => '#'
            ],
            [
                'name' => 'Transport Service',
                'description' => 'Taxi, rickshaw and transport booking services.',
                'image' => 'assets/img/services/c-4.jpg',
                'link' => '#'
            ],
            [
                'name' => 'Cleaning Service',
                'description' => 'Home and office professional cleaning services.',
                'image' => 'assets/img/services/c-5.jpg',
                'link' => '#'
            ],
            [
                'name' => 'Marketplace Stores',
                'description' => 'Buy products from verified local vendors.',
                'image' => 'assets/img/services/c-6.jpg',
                'link' => '#'
            ]
        ];
        return view('pages.home', compact('services', 'categories'));
    }


    public function loginForm()
    {
        return view('auth.login');
    }

    public function profile(Request $request)
{
    $user = auth()->user();

    if (!$user) {
        return redirect('/user-login-form');
    }

    $services = [
        [
            'id' => 1,
            'title' => 'Website Design',
            'description' => 'Modern responsive website design',
            'price' => 100,
            'status' => 'approved',
            'images' => [
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
            ]
        ],
        [
            'id' => 2,
            'title' => 'SEO Service',
            'description' => 'Complete on-page and off-page SEO',
            'price' => 50,
            'status' => 'pending',
            'images' => [
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
            ]
        ],
        [
            'id' => 3,
            'title' => 'Logo Design',
            'description' => 'Creative logo with branding',
            'price' => 30,
            'status' => 'rejected',
            'images' => [
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
            ]
        ],
        [
            'id' => 4,
            'title' => 'Mobile App UI',
            'description' => 'UI/UX design for mobile apps',
            'price' => 120,
            'status' => 'approved',
            'images' => [
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
                'https://via.placeholder.com/400x250',
            ]
        ],
    ];

    return view('auth.profile', compact('user', 'services'));
}
    public function notFound()
    {
        return view('share.not_found');
    }
}
