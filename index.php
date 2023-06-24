<html>

<head>
    <title>LBS Leonardo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />

    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

    <!-- =========================== HEADER =========================== -->

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">Leonardo</a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">
                            <i class="uil uil-estate nav_icon"></i> Home
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="uil uil-user nav_icon"></i> Sobre
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="uil uil-file-alt nav_icon"></i> Habilidades
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="uil uil-briefcase-alt nav_icon"></i> Serviços
                        </a>

                    </li>
                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i> Portfolio
                        </a>

                    </li>
                    <li class="nav_item">
                        <a href="#destaques" class="nav_link">
                            <i class="uil uil-star nav_icon"></i> Destaques
                        </a>

                    </li>
                    <li class="nav_item">
                        <a href="#parceria" class="nav_link">
                            <i class="uil uil-user-arrows nav_icon"></i> Parceria
                        </a>

                    </li>
                    <!-- <li class="nav_item">
                            <a href="#testemunhas" class="nav_link">
                                <i class="uil uil-head-side-cough nav_icon"></i> Testemunhas
                            </a>
                            
                        </li> -->
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class="uil uil-message nav_icon"></i> Contate-me
                        </a>

                    </li>
                </ul>

                <i class="uil uil-times nav_close" id='nav-close'></i>
            </div>

            <div class="nav_btns">
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav_toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- =========================== MAIN =========================== -->
    <main class="main">
        <!-- =========================== HOME =========================== -->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                        <a href="https://www.linkedin.com/in/leonardo-boleli-53a435204/" target='_blank' class="home_social-icon">
                            <i class="uil uil-linkedin"></i>
                        </a>
                        <a href="https://www.instagram.com/leoboleli/" target='_blank' class="home_social-icon">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100001533736266" target='_blank' class="home_social-icon">
                            <i class="uil uil-facebook"></i>
                        </a>
                    </div>
                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0" mask-type='alpha'>
                                <path class="path" d="M70.2,-37.7C84.6,-15.6,85.5,17.1,71.5,35.9C57.6,54.6,28.8,
                                    59.4,1.3,58.6C-26.1,57.8,-52.3,51.6,-64.6,33.7C-77,15.9,-75.6,-13.5,-62.5,
                                    -34.8C-49.5,-56.1,-24.7,-69.3,1.6,-70.3C27.9,-71.2,55.8,-59.8,70.2,-37.7Z" transform="translate(100 100)" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path class="path" d="M70.2,-37.7C84.6,-15.6,85.5,17.1,71.5,35.9C57.6,54.6,28.8,
                                    59.4,1.3,58.6C-26.1,57.8,-52.3,51.6,-64.6,33.7C-77,15.9,-75.6,-13.5,-62.5,
                                    -34.8C-49.5,-56.1,-24.7,-69.3,1.6,-70.3C27.9,-71.2,55.8,-59.8,70.2,-37.7Z" transform="translate(100 100)" />

                                <image class="home_blob-img" x='12' y='2' xlink:href='Imagens/eu_sem_fundo.png' />
                            </g>

                        </svg>
                    </div>
                    <div class="home_data">
                        <h1 class="home_title">Olá, sou Leonardo</h1>
                        <h3 class="home_subtitle">Técnico em Informática</h3>
                        <p class="home_description">Escoteiro, grande habilidade em FrontEnd, pacote Office, linguagens de programaçao
                            e muito mais!!!</p>
                        <a href="#contact" class="button button-flex">
                            Contate-me<i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button-flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>


        <!-- =========================== ABOUT =========================== -->
        <section class="about section" id="about">
            <h2 class="section_title">Sobre mim</h2>
            <span class="section_subtitle">Minha introdução</span>

            <div class="about_container container grid">
                <img src="Imagens\6.jpeg" alt="" class="about_img">

                <div class="about_data">
                    <p class="about_description">
                        Prazer em vê-lo aqui, sou Leonardo, tenho 21 anos. Atualmente estou cursando Ciencia de Dados
                        e Inteligência Artificial na PUC Campinas (2021 - 2024). Durante meu ensino médio, fiz o curso
                        de técnico em informática na ETEC Bento Quirino (2017 - 2020), em conjunto com o técnico
                        estudei bastante FrontEnd e linguagens de programação. Este site é o exemplo prático de meus
                        esforços. Desde 2011 sou Escoteiro no GE Azimute 373 e lá aprendi a formar meu caráter, entre
                        outras coisas que serão abordadas ao decorrer do site.

                    </p>

                    <div class="about_info">
                        <div>
                            <span class="about_info-title">07+</span>
                            <span class="about_info-name">Anos <br> Experiência</span>
                        </div>
                        <div>
                            <span class="about_info-title">10+</span>
                            <span class="about_info-name">Projetos <br> Completos</span>
                        </div>
                        <div>
                            <span class="about_info-title">03+</span>
                            <span class="about_info-name">Empresas <br> Trabalhadas</span>
                        </div>
                    </div>


                    <div class="about_buttons">
                        <a download="" href="Pdf\CURRÍCULO PDF.pdf" class="button button-flex">
                            Download CV<i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <!-- =========================== SKILLS =========================== -->
        <section class='skills section' id='skills'>
            <h2 class="section_title">Habilidades</h2>
            <span class="section_subtitle">Meu nível técnico</span>
            <div class="skills_container container grid">
                <div>
                    <!-- =========================== SKILLS 1 =========================== -->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Desenvolvedor FrontEnd e BackEnd</h1>
                                <span class="skills_subtitle">Mais de 3 anos</span>
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_number">50%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_php"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">JS</h3>
                                    <span class="skills_number">50%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- =========================== SKILLS 2 =========================== -->

                <div class="skills_content skills_close">
                    <div class="skills_header">
                        <i class="uil uil-server-network skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Linguagens de Programação</h1>
                            <span class="skills_subtitle">Mais de 3 anos</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">C</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_c"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Python</h3>
                                <span class="skills_number">70%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_python"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Java</h3>
                                <span class="skills_number">40%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_java"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">C#</h3>
                                <span class="skills_number">30%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_cs"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">C#+HTML</h3>
                                <span class="skills_number">30%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_cshtml"></span>
                            </div>
                        </div>


                    </div>

                </div>


                <!-- =========================== SKILLS 3 =========================== -->
                <div class="skills_content skills_close">
                    <div class="skills_header">
                        <i class="uil uil-windows skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Microsoft Office</h1>
                            <span class="skills_subtitle">Mais de 7 anos</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Word</h3>
                                <span class="skills_number">100%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_word"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Excel</h3>
                                <span class="skills_number">100%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_excel"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">PowerPoint</h3>
                                <span class="skills_number">100%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_pp"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Acces</h3>
                                <span class="skills_number">30%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_acces"></span>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- =========================== SKILLS 4 =========================== -->
                <div class="skills_content skills_close">
                    <div class="skills_header">
                        <i class="uil uil-english-to-chinese skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Línguas</h1>
                            <span class="skills_subtitle">Mais de 7 anos</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Português</h3>
                                <span class="skills_number">100%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_pt"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Inglês</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_ing"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Espanhol</h3>
                                <span class="skills_number">40%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_esp"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Japonês</h3>
                                <span class="skills_number">15%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_jap"></span>
                            </div>
                        </div>
                    </div>

                </div>



                <!-- =========================== SKILLS 5 =========================== -->
                <div class="skills_content skills_close">
                    <div class="skills_header">
                        <i class="uil uil-fidget-spinner skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Frutos do Escotismo</h1>
                            <span class="skills_subtitle">Mais de 7 anos</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Trabalho em Equipe</h3>
                                <span class="skills_number">100%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_equipe"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Liderança</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_lider"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Vontade de Melhorar</h3>
                                <span class="skills_number">1000%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_melhor"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Respeito ao Próximo</h3>
                                <span class="skills_number">100%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_resp"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Comunicativo</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_comu"></span>
                            </div>
                        </div>
                    </div>

                </div>







            </div>
            </div>
        </section>


        <!-- =========================== QUALIFICATION =========================== -->
        <section class="qualification section">
            <h2 class="section_title">Qualificação</h2>
            <span class="section_subtitle">Minha jornada pessoal</span>

            <div class="qualification_container container">
                <div class="qualification_tabs">
                    <div class="qualification_button button-flex qualification_active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification_icon"></i>
                        Educação

                    </div>
                    <div class="qualification_button button-flex" data-target='#work'>
                        <i class="uil uil-briefcase-alt qualification_icon"></i>
                        Trabalhos

                    </div>
                </div>
                <div class="qualification_sections">
                    <!-- =========================== QUALIFICATION CONTENT 1 =========================== -->
                    <div class="qualification_content qualification_active" data-content id="education">
                        <!-- =========================== QUALIFICATION 1 =========================== -->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Escotismo</h3>
                                <span class="qualification_subtitle">GE Azimute 373 - Valinhos</span>
                                <span class="qualification_subtitle">GE Dom Bosco 122 - Campinas</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2014 - 2023
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!-- =========================== QUALIFICATION 2 =========================== -->
                        <div class="qualification_data">
                            <div></div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>

                            <div>
                                <h3 class="qualification_title">Curso Técnico em Informática integrado ao Ensino Médio</h3>
                                <span class="qualification_subtitle">ETEC - Bento Quirino</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2020
                                </div>

                            </div>


                        </div>
                        <!-- =========================== QUALIFICATION 3 =========================== -->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Curso de Inglês</h3>
                                <span class="qualification_subtitle">Microcamp Valinhos</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2021

                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!-- =========================== QUALIFICATION 4 =========================== -->
                        <div class="qualification_data">
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>


                            <div>

                                <h3 class="qualification_title">Ciência de Dados e Inteligência Artificial</h3>
                                <span class="qualification_subtitle">PUC - Campinas</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 - 2024
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- =========================== QUALIFICATION CONTENT 2 =========================== -->
                    <div class="qualification_content" data-content id="work">
                        <!-- =========================== QUALIFICATION 1 =========================== -->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Técnico em Informática</h3>
                                <span class="qualification_subtitle">ALS - Análise e Consultoria de Risco</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2024
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>

                        <!-- =========================== QUALIFICATION 2 =========================== -->
                        <div class="qualification_data">
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>


                            <div>

                                <h3 class="qualification_title">Estagiário em Informática</h3>
                                <span class="qualification_subtitle">Visium Softwares</span>
                                <div class="qualification_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022 - 2024
                                </div>
                            </div>


                        </div>




                    </div>
                </div>
            </div>
        </section>


        <!-- =========================== SERVICES =========================== -->
        <section class="services section" id="services">
            <h2 class="section_title">Serviços</h2>
            <span class="section_subtitle">O que eu faço</span>

            <div class="services_container container grid">
                <!-- =========================== SERVICES 1 =========================== -->
                <div class="services_content">
                    <div>
                        <i class="uil uil-analytics services_icon"></i>
                        <h3 class="services_title">Estatística <br> Análise de Dados</h3>

                    </div>
                    <span class="button button-flex button-small button-link services-button">
                        Veja mais
                        <i class="uil uil-arrow-right"></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Estatística <br> Análise de Dados</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Obtenção de Dados</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Mineração de Dados</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Análise de Dados</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Criação de Gráficos e Infográficos</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Transmitir dados para o cliente</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <!-- =========================== SERVICES 2 =========================== -->
                <div class="services_content">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Desenvolvedor Web <br> HTML, CSS, PHP e JS</h3>

                    </div>
                    <span class="button button-flex button-small button-link services-button">
                        Veja mais
                        <i class="uil uil-arrow-right"></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Desenvolvedor Web <br> HTML, CSS, PHP e JS</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Site completo</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>FrontEnd perfeito</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Formulários</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Logins</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

                <!-- =========================== SERVICES 3 =========================== -->
                <div class="services_content">
                    <div>
                        <i class="uil uil-desktop services_icon"></i>
                        <h3 class="services_title">Programador <br> C, Python e Java</h3>

                    </div>
                    <span class="button button-flex button-small button-link services-button">
                        Veja mais
                        <i class="uil uil-arrow-right"></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Programador <br> C, Python e Java</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Análise do Problema</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Estudo dos meios de resolução</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Aplicação dos métodos de Inteligência Artificial</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Gráficos, códigos e resoluções</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>



            </div>
        </section>


        <!-- =========================== PORTFOLIO =========================== -->
        <section class="portfolio section" id="portfolio">
            <h2 class="section_title">Portfolio</h2>
            <span class="section_subtitle">Trabalhos mais recentes</span>

            <div class="portfolio_bg">
                <div class="container_portfolio">
                    <div class="card">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="content_portfolio">
                            <h2>01</h2>
                            <h3>Website Moderno</h3>
                            <p>Website responsivo, atual, com
                                conhecimentos de html, css, js e php</p>
                            <a href="#portfolio" class="button button-flex button-small button-link services-button">
                                Leia Mais
                            </a>
                            <div class="services_modal">
                                <div class="services_modal-content">
                                    <h4 class="services_modal-title">Website Moderno</h4>
                                    <i class="uil uil-times services_modal-close"></i>

                                    <ul class="services_modal-services grid">
                                        <li class="services_modal-service">
                                            <img src="Imagens\website.jpg" alt="">
                                        </li>
                                        <li class="services_modal-service">
                                            <p class="services_modal-p">
                                                Como mostrado anteriormente, tenho mais de 3 anos de experiência
                                                em desenvolvimento de sites modernos utilizando HTML, CSS, PHP
                                                e JS. Este site é o exemplo mais claro e prático das minhas habilidades,
                                                claro que nao me prendo somente a isso... Não utilizei todos meus conhecimentos
                                                para desenvolver este site pois ficaria poluído e de difícil leitura.<br>
                                                Esta sem dúvidas é a área que mais gosto e tenho familiaridade. Caso tenha
                                                interesse, tenho disponibilidade em realizar trabalhos deste ramo com um imenso
                                                prazer!!!!
                                            </p>
                                        </li>

                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="card">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="content_portfolio">
                            <h2>02</h2>
                            <h3>Programação</h3>
                            <p>Desenvolvimento de Lógicas de Programação e Algoritmos de Inteligência
                                Artificial em C, Python e Java.
                            </p>
                            <a href="#portfolio" class="button button-flex button-small button-link services-button">
                                Leia Mais
                            </a>
                            <div class="services_modal">
                                <div class="services_modal-content">
                                    <h4 class="services_modal-title">Programação</h4>
                                    <i class="uil uil-times services_modal-close"></i>

                                    <ul class="services_modal-services grid">
                                        <li class="services_modal-service">
                                            <img src="Imagens\programaçao.jpg" alt="">
                                        </li>
                                        <li class="services_modal-service">

                                            <p class="services_modal-p">
                                                Como mostrado anteriormente, tenho mais de 3 anos de
                                                experiência em programação em C, Python e Java. Consigo desenvolver qualquer
                                                trabalho que necessite destas linguagens. Anseio por aprender ainda mais
                                                neste ramo ainda que, modéstia parte, minha lógica de programação é apurada.
                                                Em meus trabalhos anteriores desenvolvi diversos programas complexos que
                                                utilizavam algoritmos de Inteligência Artificial, além de matrizes, obtenção
                                                de dados em HTML, DataFrames e DataSets, entre outros.

                                            </p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="content_portfolio">
                            <h2>03</h2>
                            <h3>Expert em Office</h3>
                            <p>Word, Excel e PowerPoint trabalhados com maestria e profissionalismo</p>
                            <a href="#portfolio" class="button button-flex button-small button-link services-button">
                                Leia Mais
                            </a>
                            <div class="services_modal">
                                <div class="services_modal-content">
                                    <h4 class="services_modal-title">Expert em Office</h4>
                                    <i class="uil uil-times services_modal-close"></i>

                                    <ul class="services_modal-services grid">
                                        <li class="services_modal-service">
                                            <img src="Imagens\office.png" alt="">
                                        </li>
                                        <li class="services_modal-service">

                                            <p class="services_modal-p">
                                                Como mostrado anteriormente, tenho mais de 7 anos de
                                                experiência utilizando o Microsoft Office: Word, Excel e
                                                PowerPoint. Desde escrever artigos com normas ABNT, desenvolver
                                                slides profissionais com efeitos e design moderno até utilizar
                                                com certa proficiência a ferramenta VBA do Excel (uma linguagem
                                                de programação interna do programa) que automatiza as planilhas,
                                                conhecimentos de várias fórmulas e muito mais!!
                                            </p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </section>

        <!-- =========================== DESTAQUES =========================== -->
        <section class="destaques section" id="destaques">
            <div class="paralax_destaques">
                <h2 class="section_title">Destaques</h2>
                <span class="section_subtitle">Os meus maiores marcos</span>
            </div>

            <div class="destaques_container container grid swiper-container-destaques">
                <div class="destaques_content billybuilder" data-tilt data-tilt-max="2" data-tilt-glare data-tilt-max-glare="0.05">
                    <div class="destaques_data">
                        <h3 class="destaques_billy-title">BILLYBUILDER</h3>
                        <span class="destaques_billy-subtitle">Nosso grande projeto</span>
                        <p class="destaques_billy-text">Em 2018, eu e meus amigos: Gianluca Dias de Micheli, Murilo Fernandes Sanches
                            e Matheus Dantas Vieira (estão em ordem na segunda foto), desenvolvemos um projeto com uma inicial finalidade
                            de ser apenas nosso TCC do Ensino Médio, porém ao participarmos de feiras como a BentoTec 2018 até 2020 onde
                            ficamos em 3º lugar de melhor projeto da nossa categoria e a Startup in School produzida pela Google onde
                            fomos colocados em 5º lugar de destaque regional nacional, devido aos méritos, conseguimos diversos prêmios
                            e um deles foi a oportunidade de apresentar no trabalho na FEBRACE 2021 (Feira Brasileira de
                            Ciências e Engenharia), esta tem impacto nacional e é muito conhecida. Mas então que grande projeto é
                            esse que recebeu grandes prêmios? BillyBuilder é um app que lista e filtra os prestadores de serviço
                            doméstico perto de você prontos para realizarem seus trabalhos. A partir da imagem 4, podemos ver o nosso
                            protótipo inicial que encheu os olhos dos jurados das feiras citadas anteriormente. Um app focado na
                            praticidade e facilidade do usuário em encontrar alguém para resolver seus problemas domésticos como:
                            ajustar o encanamento, um chuveiro queimado, um fio elétrico que não funciona mais, enfim, qualquer
                            dificuldade doméstica possível.
                        </p>
                    </div>
                    <div class="destaques_data">
                        <div>
                            <div class="swiper-container mySwiper slides-billy">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\billybuilder_logo.png" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\2.jpeg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\Foto Grupo Febrace.jpeg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\bb1.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\bb2.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\bb3.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\bb4.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\bb5.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\bb6.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\bb7.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\certificadobentotec.PNG" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\certificadofebrace.PNG" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\certificadogoogle.PNG" alt=""></div>

                                </div>
                                <!-- If we need pagination -->


                                <!-- If we need navigation buttons -->


                                <!-- If we need scrollbar -->
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="destaques_content escoteiro" data-tilt data-tilt-max="10" data-tilt-glare data-tilt-max-glare="0.25">
                    <div class="destaques_data ">
                        <h3 class="destaques_billy-title">ESCOTEIRO</h3>
                        <span class="destaques_billy-subtitle">Onde eu cresci</span>
                        <p class="destaques_billy-text">
                            Aqui sem dúvidas foi onde eu mais aprendi em toda minha vida e acho muito válido contar um pouco para
                            você este momento prazeroso que tive. Entrei no movimento em 2014 (11 anos) no Grupo Escoteiro Valinhos
                            252 onde fiquei 1 ano e logo fui para o GE Azimute 373 e aí foi onde a jornada começou de verdade.
                            Aprendi infinitas habilidades, entre elas vários nós e amarras, trabalho em equipe, liderança, solidariedade,
                            ajudar os outros, cozinhar, cortar bambu, madeira, sisal, etc, muitas canções, enfim foi um momento muito
                            incrível da minha vida e que amo tanto. Nas fotos ao lado, compartilho contigo algumas das minhas lembranças
                            mais marcantes, tive a oportunidade de ir em um acampamento mundial nos EUA em West Virginia em 22 de julho
                            de 2019, conheci pessoas incríveis, grandes amigos que vou levar para o resto da minha vida. Lá além de
                            treinar bastante meu inglês, o acampamento foi muito incrível, lindo e inesquecível. Gostaria de colocar
                            tudo que senti em palavras ou imagens mas não consigo hahahahaha.
                        </p>
                    </div>
                    <div class="destaques_data">
                        <div>
                            <div class="swiper-container mySwiper slides-escoteiro">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro1.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro2.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro3.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro4.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro5.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro6.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro7.jpg" alt=""></div>
                                    <div class="swiper-slide swiper-slide-destaques"><img src="Imagens\escoteiro8.jpg" alt=""></div>

                                </div>
                                <!-- If we need pagination -->


                                <!-- If we need navigation buttons -->


                                <!-- If we need scrollbar -->
                                <div class="swiper-scrollbar swiper-scrollbar-destaques"></div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>

        </section>



        <!-- =========================== PROJECT IN MIND =========================== -->
        <section class="project section" id="parceria">
            <div class="project_bg">
                <div class="project_container grid">
                    <div class="project_data">
                        <h2 class="project_title">Você que tem um projeto em mente</h2>
                        <span class="project_description">Me contate agora e receba 30% de desconto no seu novo projeto <br><br></span>
                        <a href="#contact" class="button button-flex button-white">
                            Contate-me
                            <i class="uil uil-message project_icon button_icon"></i>
                        </a>
                    </div>

                    <img src="Imagens\10.jpeg" alt="" class="project_img">
                </div>
            </div>
        </section>


        <!-- =========================== CONTACT ME =========================== -->
        <section class="contact section" id="contact">
            <h2 class="section_title">Contato</h2>
            <span class="section_subtitle">Aqui você chega até mim</span>

            <div class="contact_container container grid">
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Celular</h3>
                            <span class="contact_subtitle">+55 (19) 98186-6333</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">E-mail</h3>
                            <span class="contact_subtitle">leo.boleli@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Localização</h3>
                            <span class="contact_subtitle">Brasil - Valinhos - SP</span>
                        </div>
                    </div>
                </div>

                <form action="processa.php" method="post" class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label class="contact_label">Nome</label>
                            <input name="nome" type="text" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label class="contact_label">E-mail</label>
                            <input name="email" type="email" class="contact_input">
                        </div>
                    </div>
                    <div class="contact_content">
                        <label class="contact_label">Projeto / Assunto</label>
                        <input name="assunto" type="text" class="contact_input">
                    </div>
                    <div class="contact_content">
                        <label class="contact_label">Mensagem</label>
                        <textarea name="mensagem" cols="0" rows="7" class="contact_input"></textarea>
                    </div>

                    <div>
                        <button type='submit' value='Entrar' class="button button-flex">
                            Enviar
                            <i class="uil uil-message button_icon"></i>
                        </button>
                    </div>
                </form>

            </div>
        </section>
    </main>

    <!-- =========================== FOOTER =========================== -->
    <footer class="footer">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">Leonardo</h1>
                    <span class="footer_subtitle">Técnico em Informática</span>
                </div>

                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Serviços</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Contato</a>
                    </li>
                </ul>

                <div class="footer_socials">
                    <a href="https://www.facebook.com/profile.php?id=100001533736266" target="_blank" class="footer_social">
                        <i class="uil uil-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/leoboleli/" target="_blank" class="footer_social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/leonardo-boleli-53a435204/" target="_blank" class="footer_social">
                        <i class="uil uil-linkedin"></i>
                    </a>
                </div>
            </div>


            <p class="footer_copy">&#169; LBS. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- =========================== SCROLL TOP =========================== -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>


    <!-- =========================== JS =========================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="vanilla-tilt.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src='swiper-bundle.min.js'></script>
    <script src='script.js'></script>


</body>

</html>