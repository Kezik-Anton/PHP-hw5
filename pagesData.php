<?php

    $pageData = [
        'about' => [
            'link' => 'about',
            'name' => 'About', 
            'text' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, libero adipisci iure consectetur tempora suscipit officia provident porro odio corporis dolore saepe rerum nulla nostrum laboriosam non odit voluptatem perferendis!</p>
            <p>Culpa molestias quisquam corrupti temporibus soluta pariatur expedita voluptate, doloribus sint tenetur, amet sapiente. Est quasi molestias magni mollitia, recusandae beatae voluptas similique eligendi amet modi sed incidunt omnis itaque?</p>
            <p>Deleniti illum necessitatibus inventore aperiam, debitis et, ducimus ad nemo exercitationem corrupti consectetur fuga voluptas eius quisquam accusamus voluptate? Mollitia molestias quidem unde nostrum neque aliquam est quos rem architecto.</p>
            <p>Possimus dolores quos cupiditate laborum, eveniet ratione dolorum debitis velit consectetur repudiandae porro officia rerum natus nulla consequuntur, ipsum eaque nostrum placeat, praesentium quo sequi. Obcaecati illo quasi cupiditate itaque!</p>'
        ],
        
        'blog' => [
            'link' => 'blog',
            'name' => 'Blog', 
            'text' => [
                'post1' => [
                    'name' => 'Made With Love In Toronto', 
                    'type' => 'news',
                    'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti nisi fuga obcaecati doloremque numquam laboriosam minima labore vero laudantium aliquam.'
                ], 
                'post2' => [
                    'name' => 'Startup News & Emerging Tech',
                    'type' => 'photo', 
                    'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti nisi fuga obcaecati doloremque numquam laboriosam minima labore vero laudantium aliquam.'
                ], 
                'post3' => [
                    'name' => 'Bitcoin Will Soon Rule The World', 
                    'type' => 'news',
                    'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti nisi fuga obcaecati doloremque numquam laboriosam minima labore vero laudantium aliquam.'
                ], 
                'post4' => [
                    'name' => 'Wearable Technology On The Rise', 
                    'type' => 'news',
                    'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti nisi fuga obcaecati doloremque numquam laboriosam minima labore vero laudantium aliquam.'
                ], 
                'post5' => [
                    'name' => 'Learn Web Design In 30 Days!', 
                    'type' => 'media',
                    'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti nisi fuga obcaecati doloremque numquam laboriosam minima labore vero laudantium aliquam.'
                ]
            ]
        ],

        'portfolio' => [
            'link' => 'portfolio',
            'name' => 'Portfolio', 
            'text' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, libero adipisci iure consectetur tempora suscipit officia provident porro odio corporis dolore saepe rerum nulla nostrum laboriosam non odit voluptatem perferendis!</p>
            <p>Culpa molestias quisquam corrupti temporibus soluta pariatur expedita voluptate, doloribus sint tenetur, amet sapiente. Est quasi molestias magni mollitia, recusandae beatae voluptas similique eligendi amet modi sed incidunt omnis itaque?</p>
            <p>Deleniti illum necessitatibus inventore aperiam, debitis et, ducimus ad nemo exercitationem corrupti consectetur fuga voluptas eius quisquam accusamus voluptate? Mollitia molestias quidem unde nostrum neque aliquam est quos rem architecto.</p>
            <p>Possimus dolores quos cupiditate laborum, eveniet ratione dolorum debitis velit consectetur repudiandae porro officia rerum natus nulla consequuntur, ipsum eaque nostrum placeat, praesentium quo sequi. Obcaecati illo quasi cupiditate itaque!</p>'
        ], 

        'contact' => [
            'link' => 'contact',
            'name' => 'Contact', 
            'text' => '
                <form action="/page.php" method="POST">
                    <div class="formname">Name</div>
                    <input name="name" type="text" />
                    <div class="formname">Phone</div>
                    <input name="phone" type="tel" />
                    <div class="formname">Email</div>
                    <input name="email" type="email" />
                    <div class="formname">Message</div>
                    <textarea name="message"></textarea>
                    <button class="button">Send</button>
                </form>
        '], 
    ];