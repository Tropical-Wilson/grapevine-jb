<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/webdev/HTTP/grapevine-v3/user/data/gantry5/themes/g5_helium/config/live_support/layout.yaml',
    'modified' => 1486916525,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1475608600
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/header/' => [
                
            ],
            '/intro/' => [
                0 => [
                    0 => 'spacer-9209 25',
                    1 => 'custom-2004 50',
                    2 => 'spacer-8407 25'
                ]
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
                        'mainbar 75' => [
                            
                        ]
                    ],
                    1 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'position-position-3949'
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
                    'boxed' => '1',
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
                'subtype' => 'main',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ]
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
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'custom-2004' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<script type="text/javascript">
    function pullQueryString() {
        var error = window.location.search;
        if (error.substring(0, 1) == "?") {
            error = error.substring(1);
        }
        return error;
    }
</script>

<form name="logmeinsupport" action="https://secure.logmeinrescue.com/Customer/Code.aspx"
 method="post" id="logmeinsupport">
  <div>
      <span>Enter your 6-digit code: </span><input type="text" name="Code" /><br />
      <input class="button button-xsmall" style="margin-top:1rem" type="submit" value="Connect to technician" />
      <input type="hidden" name="tracking0" maxlength="64" /> <!-- optional -->
      <input type="hidden" name="language" maxlength="5" /> <!-- optional -->
      <input type="hidden" name="hostederrorhandling" value="1" />

      <div style="clear:both;"></div>
      <b><font color="red">
         <script type="text/javascript">
             var response = pullQueryString();
             response = response.substring(22);

             if(response.toLowerCase() == "pincode_missing"){document.write("Assisted service can be obtained by first<br />contacting support at 0115 9280 908." + "<br />");
             }
             else if(response.toLowerCase() == "pincode_invalid"){document.write("The PIN code you have entered is invalid." + "<br />");
             }
             else if(response.toLowerCase() == "pincode_expired"){document.write("The PIN code you have entered is expired." + "<br />");
             }
             else if(response.toLowerCase() == "pincode_error"){document.write("The PIN code you have entered is invalid." + "<br />");
             }
             else if(response.toLowerCase() == "pincode_alreadyused"){document.write("The PIN code you have entered has already been used." + "<br />");
             }
             else{
                 document.write(response) + "<br />";
             }
         </script>
         </font></b>

  </div>
</form>
'
                ]
            ],
            'position-position-3949' => [
                'title' => 'Sidebar',
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ]
        ]
    ]
];
