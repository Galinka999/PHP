<!--<a href="about.php">О нас</a>-->
<!--<a href="index.php">Главная</a><br>-->
<?php
$menu = [
        [
           'title' => 'Главная',
           'href' => '/'
        ],
        [
            'title' => 'Каталог',
            'href' => '/catalog',
            'subitems' => [
                [
                'title' => 'Женская одежда',
                'href' => '/catalog/goods/',
                 'subitems' => [
                        [
                            'title' => 'Зимняя',
                            'href' => '/catalog/goods/',

                        ],
                        [
                            'title' => 'Летняя',
                            'href' => '/catalog/goods/',
                        ],
                        [
                            'title' => 'Демисезонная',
                            'href' => '/catalog/goods/',
                        ],
                    ]
                ],
                [
                    'title' => 'Мужская одежда',
                    'href' => '/catalog/goods/',
                ],
                [
                    'title' => 'Детская одежда',
                    'href' => '/catalog/goods/',
                ],
            ],
        ],
        [
            'title' => 'Корзина',
            'href' => '/basket',
        ]
];

function getMenu($menuArray)
{
    $output = "<ul>";

    foreach ($menuArray as $item) {
        $output .= "<li><a href=\"{$item["href"]}\">{$item["title"]}</a>";
        if (isset($item["subitems"])) {
            $output .= getMenu($item["subitems"]);
        }
        $output .= "</li>";
    }

    $output .= "</ul>";
    return $output;
}
echo getMenu($menu);



