<?php
// Site Configuration
$config = [
    'site' => [
        'title' => 'Joseph Louise Samantila - IT Systems Analyst & Developer',
        'description' => 'IT professional with 7+ years of experience in application/web development, system administration, and project management.',
        'keywords' => 'IT Systems Analyst, Developer Supervisor, Web Development, Project Management, Game Development',
        'author' => 'Joseph Louise Samantila'
    ],
    'personal' => [
        'name' => 'Joseph Louise Samantila',
        'location' => 'Malate, Manila',
        'phone' => '+63 926 808 8538',
        'email' => 'joseph.samantila@gmail.com',
        'title' => 'Systems Analyst/Developer Supervisor',
        'summary' => 'Highly motivated and results-oriented IT professional with 7+ years of experience in application/web development, system administration, and user support. Expert in leading projects, managing vendors, and delivering innovative solutions using diverse technologies.'
    ],
    'skills' => [
        'languages' => [
            ['name' => 'PHP', 'level' => 95],
            ['name' => 'JavaScript', 'level' => 90],
            ['name' => 'Java', 'level' => 85],
            ['name' => 'C#', 'level' => 85],
            ['name' => 'C++', 'level' => 80],
            ['name' => 'VB.NET', 'level' => 85],
            ['name' => 'Python', 'level' => 75]
        ],
        'technologies' => [
            ['name' => '.NET', 'level' => 90],
            ['name' => 'MySQL', 'level' => 95],
            ['name' => 'MS SQL', 'level' => 90],
            ['name' => 'Laravel', 'level' => 85],
            ['name' => 'Pusher', 'level' => 80],
            ['name' => 'PeopleSoft', 'level' => 85],
            ['name' => 'Windows', 'level' => 90],
            ['name' => 'UNIX/Linux', 'level' => 85]
        ],
        'tools' => [
            'Eclipse', 'Visual Studio', 'SQL Server Management Studio',
            'PeopleSoft Tools', 'Putty', 'WinSCP'
        ],
        'methodologies' => [
            'Agile', 'Waterfall'
        ],
        'soft_skills' => [
            'Leadership', 'Project Management', 'Vendor Management',
            'Problem-Solving', 'Analytical Thinking', 'Communication',
            'Teamwork', 'Time Management', 'Client Relationship Management'
        ]
    ],
    'experience' => [
        [
            'title' => 'Systems Analyst/Developer Supervisor',
            'company' => 'First Balfour',
            'period' => 'July 2023 - Present',
            'highlights' => [
                'Led the Centralized Employee Master Records (CEMR) project',
                'Developed bulk data upload features',
                'Managed third-party vendors',
                'Automated RAMCO ReportsDB processes',
                'Led project meetings and made key architectural decisions'
            ]
        ],
        [
            'title' => 'Game Developer',
            'company' => "Winner's Entertainment Inc.",
            'period' => 'February 2023 - June 2023',
            'highlights' => [
                'Developed company website with Laravel backend',
                'Implemented games, news, and e-commerce functionalities',
                'Made key architectural decisions'
            ]
        ],
        [
            'title' => 'IT Supervisor/Project Manager',
            'company' => 'Mechanical Handling Equipment Company Inc. (MHECO)',
            'period' => 'May 2019 - January 2023',
            'highlights' => [
                'Managed IT projects and resources',
                'Developed .NET applications',
                'Coordinated with vendors and end users',
                'Led technology adoption initiatives'
            ]
        ],
        [
            'title' => 'Software Engineer | PeopleSoft Admin',
            'company' => 'Accenture',
            'period' => 'June 2017 - February 2019',
            'highlights' => [
                'Administered PeopleSoft applications',
                'Automated processes and performed migrations',
                'Optimized system performance',
                'Developed automation scripts'
            ]
        ]
    ],
    'consulting' => [
        [
            'client' => 'IMA Assessment and Training Center Inc.',
            'period' => '2022 - Present',
            'projects' => [
                'Developed CRUD modules with PHP and AJAX',
                'Built portal website using Laravel',
                'Created real-time survey application',
                'Developed online course system',
                'Implemented AI-assisted assessment management'
            ]
        ],
        [
            'title' => 'Indi-Game Developer',
            'period' => 'June 2021 - Present',
            'projects' => [
                'Game development and administration',
                'Anti-hack implementation',
                'Licensing system development'
            ]
        ]
    ],
    'education' => [
        'degree' => 'Bachelor of Science in Information Technology',
        'institution' => 'Technological University of the Philippines'
    ],
    'social' => [
        'github' => 'https://github.com/jlsamantila',
        'linkedin' => '#', // Add your LinkedIn URL
        'twitter' => '#'  // Add your Twitter URL if you have one
    ]
];

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session if needed
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}