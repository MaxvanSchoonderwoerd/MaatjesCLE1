<?php
include 'template.php';

?>

<?= template_head("Home") ?>

<body>

<?= template_header("Home") ?>

<main>
    <div class="gradient">
        <img src="../src/infoImg.png" alt="infoImgs" class="infoImg">
    </div>
    <section class="infoSection">
        <div class="infoContainer">
            <h1 class="infoTitle">Wat doen wij?</h1>
            <p class="infoBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>
    <section class="btnImgSection">
        <div class="btnImgContainer">
            <div class="uploadButtonContainer"><a href="upload.php" class="uploadButton">Upload</a></div>
            <img class="pictureHome" src="https://source.unsplash.com/random/1920x1080" alt="Maatjes">
        </div>
    </section>

    <sectoon class="jobSection">
        <div class="jobContainer">
            <div class="jobCard blue">
                <h1 class="jobTitle">Lorem ipsum dolor.</h1>
                <p class="jobDescription">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequatur culpa cupiditate debitis
                    esse, ex expedita quibusdam sequi suscipit voluptate. Ad aliquid assumenda commodi consectetur
                    debitis dignissimos, doloremque doloribus earum hic incidunt ipsam laboriosam laudantium magni modi
                    nam, nostrum odio pariatur perferendis vel voluptas! Accusamus corporis ipsa molestiae neque quas
                    quod reprehenderit voluptas voluptatibus! Aliquid, consectetur deleniti earum et eum fuga hic iusto
                    laboriosam libero maiores minus, neque nesciunt officiis quae quis quo rerum soluta tempore? Ad
                    architecto asperiores autem beatae, consequuntur dolor doloremque earum eos esse harum illum
                    incidunt iste nisi officiis pariatur ratione sequi unde veritatis voluptate voluptatibus.
                </p>
                <p class="jobNameAndPlace blueDark">Lorem ipsum | <span class="uppercase">Rotterdam</span></p>
                <p id="whiteText" class="jobTel blueDark">Bel nu! <i class="fas fa-phone-alt"></i>0674993764</p>
            </div>
            <div class="jobCard green">
                <h1 class="jobTitle">Lorem ipsum dolor.</h1>
                <p class="jobDescription">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequatur culpa cupiditate debitis
                    esse, ex expedita quibusdam sequi suscipit voluptate. Ad aliquid assumenda commodi consectetur
                    debitis dignissimos, doloremque doloribus earum hic incidunt ipsam laboriosam laudantium magni modi
                    nam, nostrum odio pariatur perferendis vel voluptas! Accusamus corporis ipsa molestiae neque quas
                    quod reprehenderit voluptas voluptatibus! Aliquid, consectetur deleniti earum et eum fuga hic iusto
                    laboriosam libero maiores minus, neque nesciunt officiis quae quis quo rerum soluta tempore? Ad
                    architecto asperiores autem beatae, consequuntur dolor doloremque earum eos esse harum illum
                    incidunt iste nisi officiis pariatur ratione sequi unde veritatis voluptate voluptatibus.
                </p>
                <p class="jobNameAndPlace greenDark">Lorem ipsum | <span class="uppercase">Rotterdam</span></p>
                <p id="whiteText" class="jobTel greenDark">Bel nu! <i class="fas fa-phone-alt"></i>0674993764</p>
            </div>
            <div class="jobCard red">
                <h1 class="jobTitle">Lorem ipsum dolor.</h1>
                <p class="jobDescription">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequatur culpa cupiditate debitis
                    esse, ex expedita quibusdam sequi suscipit voluptate. Ad aliquid assumenda commodi consectetur
                    debitis dignissimos, doloremque doloribus earum hic incidunt ipsam laboriosam laudantium magni modi
                    nam, nostrum odio pariatur perferendis vel voluptas! Accusamus corporis ipsa molestiae neque quas
                    quod reprehenderit voluptas voluptatibus! Aliquid, consectetur deleniti earum et eum fuga hic iusto
                    laboriosam libero maiores minus, neque nesciunt officiis quae quis quo rerum soluta tempore? Ad
                    architecto asperiores autem beatae, consequuntur dolor doloremque earum eos esse harum illum
                    incidunt iste nisi officiis pariatur ratione sequi unde veritatis voluptate voluptatibus.
                </p>
                <p class="jobNameAndPlace redDark">Lorem ipsum | <span class="uppercase">Rotterdam</span></p>
                <p id="whiteText" class="jobTel redDark">Bel nu! <i class="fas fa-phone-alt"></i>0674993764</p>
            </div>
            <div class="jobCard purple">
                <h1 class="jobTitle">Lorem ipsum dolor.</h1>
                <p class="jobDescription">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequatur culpa cupiditate debitis
                    esse, ex expedita quibusdam sequi suscipit voluptate. Ad aliquid assumenda commodi consectetur
                    debitis dignissimos, doloremque doloribus earum hic incidunt ipsam laboriosam laudantium magni modi
                    nam, nostrum odio pariatur perferendis vel voluptas! Accusamus corporis ipsa molestiae neque quas
                    quod reprehenderit voluptas voluptatibus! Aliquid, consectetur deleniti earum et eum fuga hic iusto
                    laboriosam libero maiores minus, neque nesciunt officiis quae quis quo rerum soluta tempore? Ad
                    architecto asperiores autem beatae, consequuntur dolor doloremque earum eos esse harum illum
                    incidunt iste nisi officiis pariatur ratione sequi unde veritatis voluptate voluptatibus.
                </p>
                <p class="jobNameAndPlace purpleDark">Lorem ipsum | <span class="uppercase">Rotterdam</span></p>
                <p id="whiteText" class="jobTel purpleDark">Bel nu! <i class="fas fa-phone-alt"></i>0674993764</p>
            </div>
        </div>
    </sectoon>

</main>
</body>

</html>