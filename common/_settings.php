<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$_default_image = "images/bg-home.jpg";


/*------ Menus ------
(url => label) */

/* Site menu */
$site_menu = array(
    "/products" => "Productos",
    "/procesos" => "Procesos",
    "/empres" => "Empresa",
    "/contacto" => "Contacto",
);

/* Footer menus */
$footer_1_menu = array(
    "/1" => "CATEGORÍA PRODUCTOS 1",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
    "/5" => "Subcategoría 4",
    "/6" => "Subcategoría 5",
);
$footer_2_menu = array(
    "/1" => "CATEGORÍA PRODUCTOS 2",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
);
$footer_3_menu = array(
    "/1" => "CATEGORÍA PRODUCTOS 3",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
    "/5" => "Subcategoría 4",
);
$footer_4_menu = array(
    "/1" => "CATEGORÍA PRODUCTOS 4",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
);
$footer_5_menu = array(
    "/1" => "CATEGORÍA PRODUCTOS 5",
);
$footer_6_menu = array(
    "/1" => "CATEGORÍA PRODUCTOS6",
    "/2" => "Subcategoría 1",
);
$footer_7_menu = array(
    "/1" => "CATEGORÍA PRODUCTOS 7",
);

/* Footer nav menu */
$footer_nav_menu = array(
    "/empresa" => "Empresa",
    "/productos" => "Productos",
    "/terminos" => "Términos y condiciones",
    "/devoluciones" => "Política de devoluciones",
    "/contacto" => "Contacto",
);

/* Footer disclaimers menu */
$footer_disclaimer_menu = array(
    "/aviso-legal" => "Aviso legal",
    "/privacidad" => "Política de privacidad",
    "/cookies" => "Política de cookies",
);


/*------ Top image ------*/
$top_image_section = (object) array(
    "title" => "TÍTULO H1",
    "content" => "Lorem fistrum de la pradera amatomaa ahorarr por la gloria de mi madre benemeritaar. De la pradera la caidita ese hombree te voy a borrar el cerito pupita la caidita amatomaa. Amatomaa a wan pupita a wan condemor apetecan me cago en tus muelas. Mamaar caballo blanco caballo negroorl no puedor no te digo trigo por no llamarte Rodrigor por la gloria de mi madre me cago en tus muelas ese hombree papaar papaar a peich. Apetecan torpedo hasta luego Lucas ese pedazo de apetecan pupita pecador. Jarl tiene musho peligro papaar papaar condemor está la cosa muy malar caballo blanco caballo negroorl. Condemor de la pradera pupita tiene musho peligro fistro sexuarl ese pedazo de quietooor mamaar tiene musho peligro.",
    "image" => $_default_image,
);


/*------ 1st section blocks ------
(url => page_data array) */
$first_section_pages = array(
    "/1" => array(
        "title" => "CATEGORÍA DE PRODUCTO 1",
        "description" => "Ese hombree reprehenderit reprehenderit ut Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/1-products/product-1.jpg",
    ),
    "/2" => array(
        "title" => "CATEGORÍA DE PRODUCTO 2",
        "description" => "Ese hombree reprehenderit reprehenderit ut Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/1-products/product-2.jpg",
    ),
    "/3" => array(
        "title" => "CATEGORÍA DE PRODUCTO 3",
        "description" => "Ese hombree reprehenderit reprehenderit ut Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/1-products/product-3.jpg",
    ),
    "/4" => array(
        "title" => "CATEGORÍA DE PRODUCTO 4",
        "description" => "Ese hombree reprehenderit reprehenderit ut Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/1-products/product-4.jpg",
    ),
    "/5" => array(
        "title" => "CATEGORÍA DE PRODUCTO 5",
        "description" => "Ese hombree reprehenderit reprehenderit ut Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/1-products/product-5.jpg",
    ),
    "/6" => array(
        "title" => "CATEGORÍA DE PRODUCTO 6",
        "description" => "Ese hombree reprehenderit reprehenderit ut Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/1-products/product-6.jpg",
    ),
    "/7" => array(
        "title" => "CATEGORÍA DE PRODUCTO 7",
        "description" => "Ese hombree reprehenderit reprehenderit ut Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/1-products/product-7.jpg",
    ),
);


/*------ 2nd section ------*/
$second_section = (object) array(
    "title" => "TÍTULO H2",
    "content" => "Lorem fistrum de la pradera amatomaa ahorarr por la gloria de mi madre benemeritaar. De la pradera la caidita ese hombree te voy a borrar el cerito pupita la caidita amatomaa.Lorem fistrum de la pradera amatomaa ahorarr por la gloria de mi madre benemeritaar. De la pradera la caidita ese hombree te voy a borrar el cerito pupita la caidita amatomaa.",
    "image" => $_default_image,
    "logos" => glob("images/2-logos/*.png"),
);


/*------ 3rd section blocks ------
(url => page_data array) */
$third_section_pages = array(
    "/1" => array(
        "title" => "PRODUCTO 1",
        "description" => "Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/3-products/product-1.jpg",
    ),
    "/2" => array(
        "title" => "PRODUCTO 2",
        "description" => "Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/3-products/product-2.jpg",
    ),
    "/3" => array(
        "title" => "PRODUCTO 3",
        "description" => "Ese hombree reprehenderit reprehenderit ut occaecat está la cosa muy malar duis ad condemor cillum.",
        "image" => "images/3-products/product-3.jpg",
    ),
);


/*------ 4th section blocks ------
(url => page_data array) */
$fourth_section_pages = array(
    "/1" => array(
        "title" => "CATEGORÍA DESTACADA 1",
        "image" => "images/4-featured-categories/featured-category-1.jpg",
    ),
    "/2" => array(
        "title" => "CATEGORÍA DESTACADA 2",
        "image" => "images/4-featured-categories/featured-category-2.jpg",
    ),
    "/3" => array(
        "title" => "CATEGORÍA DESTACADA 3",
        "image" => "images/4-featured-categories/featured-category-3.jpg",
    ),
    "/4" => array(
        "title" => "CATEGORÍA DESTACADA 4",
        "image" => "images/4-featured-categories/featured-category-4.jpg",
    ),
    "/5" => array(
        "title" => "CATEGORÍA DESTACADA 5",
        "image" => "images/4-featured-categories/featured-category-5.jpg",
    ),
);


/*------ Contact block (5th section) ------*/
$_contact_section = (object) array(
    "address" => "Passeig Picasso, 40",
    "postal_code" => "08003",
    "address_city" => "Barcelona",
    "phone" => "935 22 22 44",
    "email" => "hola@iestrategic.com",
    "form_text" => "Si desea más información acerca de cualquiera de nuestros servicios rellene el siguiente formulario y nos pondremos en contacto con usted.",
);


include '_icons.php';

?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">