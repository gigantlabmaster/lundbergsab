<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/emil/Documents/code/lundbergsab/user/data/gantry5/themes/g5_helium/config/two_sidebars_right/layout.yaml',
    'modified' => 1491210004,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1468340932
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/header/' => [
                0 => [
                    0 => 'custom-6833'
                ]
            ],
            '/intro/' => [
                
            ],
            '/features/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'mainbar 50' => [
                            0 => [
                                0 => 'custom-5490'
                            ]
                        ]
                    ],
                    1 => [
                        'aside 25' => [
                            0 => [
                                0 => 'custom-6361'
                            ],
                            1 => [
                                0 => 'custom-4736'
                            ]
                        ]
                    ],
                    2 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'custom-9374'
                            ],
                            1 => [
                                0 => 'custom-4266'
                            ]
                        ]
                    ]
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside'
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ]
        ],
        'content' => [
            'custom-6833' => [
                'title' => 'Header',
                'attributes' => [
                    'html' => '<h2 class="large-heading">Two Sidebars Right</h2>
<p>Cuaqum ante augue, iaculis eget fringilla vel, gravida non nibh. Nullam dignissim, felis eu imperdiet feugiat, libero ipsum gravida arcu, eu fermentum elit metus vel mauris.</p>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'custom-5490' => [
                'title' => 'Content',
                'attributes' => [
                    'html' => '<p>Nullam eget neque. Nullam <a href="#">imperdiet venenatis</a> ligula. Integer a leo. Nunc consectetur. Maecenas sem. Proin vulputate, massa vel volutpat laoreet, purus erat pretium ligula, eget varius arcu nibh sed libero. Fusce ante. Nullam interdum aliquet metus. Ut ultrices vestibulum tellus. Praesent quis erat. Nam id turpis sit amet neque cursus luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque id tortor. In vitae sapien. Nunc quis tellus. </p>

<h3 style="display: inline-block;">H3 Heading</h3>
<p>In erat. Pellentesque erat. <strong>Mauris vehicula vestibulum justo.</strong> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pulvinar est. Integer urna. Pellentesque pulvinar dui a magna. Nulla facilisi.</p>

<h4>H4 Heading</h4>
<p>Mauris lobortis. Aliquam lacinia purus. <strong>Pellentesque magna</strong>. Mauris euismod metus nec tortor. Phasellus elementum, quam a euismod imperdiet, ligula felis faucibus enim, eu malesuada nunc felis sed turpis. <a href="#">Morbi convallis luctus tortor</a>. Integer bibendum lacinia velit. Suspendisse mi lorem, porttitor ut, interdum et, lobortis a, lectus. Phasellus vitae est at massa luctus iaculis. In tincidunt.</p>'
                ]
            ],
            'custom-6361' => [
                'title' => 'Right Sidebar',
                'attributes' => [
                    'html' => '<h3>Right Sidebar</h3>
<p class="nomarginbottom">A right column layout example. The sidebar is independent from the Mainbody so can have multiple rows and columns, separate from the Mainbody area.</p>'
                ],
                'block' => [
                    'variations' => 'box2'
                ]
            ],
            'custom-4736' => [
                'title' => 'Lipsum',
                'attributes' => [
                    'html' => '<p>Nullam eget neque. Nullam <a href="#">imperdiet venenatis</a> ligula. Integer a leo. Nunc consectetur. Maecenas sem. Proin vulputate, massa vel volutpat laoreet, purus erat pretium ligula, eget varius arcu nibh sed libero. Fusce ante. Nullam interdum aliquet metus. Ut ultrices vestibulum tellus. Praesent quis erat. Nam id turpis sit amet neque cursus luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>'
                ],
                'block' => [
                    'variations' => 'box-outline'
                ]
            ],
            'custom-9374' => [
                'title' => 'Flexible Layouts',
                'attributes' => [
                    'html' => '<h3>Flexible Layouts</h3>
<p>Gantry 5 benefits from a flexible and intuitive, drag &amp; drop layout manager. You can add as many rows and blocks to each section as you desire, and configure their distance to intervals of 1%.</p>'
                ],
                'block' => [
                    'variations' => 'box1'
                ]
            ],
            'custom-4266' => [
                'title' => 'Lipsum',
                'attributes' => [
                    'html' => '<p>Maecenas sem. Proin vulputate, massa vel volutpat laoreet, purus erat pretium ligula, eget varius arcu nibh sed libero. Fusce ante. Nullam interdum aliquet metus. Ut ultrices vestibulum tellus. Praesent quis erat. Nam id turpis sit amet neque cursus luctus. Nullam eget neque. Nullam imperdiet venenatis ligula. Integer a leo. Nunc consectetur. </p>'
                ],
                'block' => [
                    'variations' => 'box-gradient'
                ]
            ]
        ]
    ]
];
