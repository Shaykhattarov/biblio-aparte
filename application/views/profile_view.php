<main class="container">
        <!-- Информация профиля  -->
        <div class="profile_inf">
            <div class="profile_inf_ava">
                <?  
                    $avatar = $data['avatar'];
                    echo "<img class='profile_inf_ava_photo' src='$avatar' alt=''>";
                ?>
            </div>
            <div class="profile_inf_name"><?= $data['nickname'] ?></div>
            <a class="profile_inf_bt_edit" href="/profile_edit">Редактировать</a>
        </div>

        <!-- Блок коллекций -->
        <div class="main_title">Мои коллекции</div>
        <div class="wrapper">
            <img class="arrow_1 left" id="left" src="/images/arrow_left.png" alt="">
            <div class="list_books">
                <? if (!empty($data['collections'])): ?>
                    <? foreach ($data['collections'] as $key => $value) { ?>
                        <div class="list_book">
                            <a href="/collection?id=<?= $key ?>">
                                <img src="/images/collections/<?= $value['image'] ?>" alt="Обложка" class="list_book_img">
                                <div class="list_book_name"><?= $value['name'] ?></div>
                            </a>
                        </div>
                    <? } ?>
                <? endif; ?>
            </div>
            <img class="arrow_1 rigth" id="right" src="/images/arrow-rigth.png" alt="">
        </div>
        <div class="btn">
            <a class="profile_bt_all" href="/collections">Показать все</a>
        </div>

        <!-- Блок рецензий -->
        <div class="main_title">Мои рецензии</div>
        <div class="wrapper">
                <img class="arrow_1 left" id="left_1" src="/images/arrow_left.png" alt="">
                <div class="list_books two">
                        <div class="list_book">
                            <a href="profile_review_full.html">
                                <img src="/images/MasterMarg.png" alt="Обложка" class="list_book_img">
                                <div class="list_book_name">Мастер и маргарита</div>
                            </a>
                            
                        </div>
                        <div class="list_book">
                            <a href="profile_review_full.html">
                            <img src="/images/re_2.png" alt="Обложка" class="list_book_img">
                            <div class="list_book_name">Преступление и наказание</div>
                            </a>
                        </div>
                        <div class="list_book">
                            <a href="profile_review_full.html">
                                <img src="/images/re_3.png" alt="Обложка" class="list_book_img">
                                <div class="list_book_name">Анна Каренина</div>
                            </a>
                            
                        </div>
                        <div class="list_book">
                            <a href="profile_review_full.html">
                                <img src="/images/re_4.png" alt="Обложка" class="list_book_img">
                                <div class="list_book_name">Маленькие женщины</div>
                            </a>     
                        </div>
                        <div class="list_book">
                            <a href="profile_review_full.html">
                            <img src="/images/re_4.png" alt="Обложка" class="list_book_img">
                            <div class="list_book_name">Маленькие женщины</div>
                            </a>
                        </div>
                        <div class="list_book">
                            <a href="profile_review_full.html">
                                <img src="/images/re_4.png" alt="Обложка" class="list_book_img">
                                <div class="list_book_name">Маленькие женщины</div>
                            </a>
                        </div>
                        <div class="list_book">
                            <a href="profile_review_full.html">
                                <img src="/images/re_4.png" alt="Обложка" class="list_book_img">
                                <div class="list_book_name">Маленькие женщины</div>
                            </a>
                        </div>
                        <div class="list_book">
                            <a href="profile_review_full.html">
                                <img src="/images/re_4.png" alt="Обложка" class="list_book_img">
                                <div class="list_book_name">Маленькие женщины</div>
                            </a>
                        </div>
                </div>
                <img class="arrow_1 rigth" id="right_1" src="/images/arrow-rigth.png" alt="">
        </div>

        <div class="btn">
            <a class="profile_bt_all" href="profile_all_reviews.html">Показать все</a>
        </div>

        <!-- Блок - Мои книги -->
        <div class="main_title">Мои книги</div>
        <div class="wrapper">
            <img class="arrow left" id="left_2" src="/images/arrow_left.png" alt="">
            <div class="list_books three">
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/MasterMarg.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Мастер и Маргарита</div>
                        <div class="list_book_author">Булгаков М. А.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span class="active"></span>    
                                <span class="active"></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/BookThief.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Книжный вор</div>
                        <div class="list_book_author">Маркус З.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span class="active"></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/HowToSell.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Как правильно продавать, если ты интроверт...</div>
                        <div class="list_book_author">Меттью П.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
            </div>
            <img class="arrow rigth" id="right_2" src="/images/arrow-rigth.png" alt="">
        </div>

        <div class="btn">
            <a class="profile_bt_all" href="profile_my_book.html">Показать все</a>
        </div>

        <!-- Блок - Избранное  -->

        <div class="main_title">Избранное</div>
        <div class="wrapper">
            <img class="arrow left" id="left_3" src="/images/arrow_left.png" alt="">
            <div class="list_books four">
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/happiness.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Сыворотка счастья</div>
                        <div class="list_book_author">Калинина Д.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/birds.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Саги огненных птиц</div>
                        <div class="list_book_author">Ёрм А.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/dragon.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Как убить дракона</div>
                        <div class="list_book_author">Стивенсон К.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/psih.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Психосоматика. Как распознать и обезвредить хронический стресс</div>
                        <div class="list_book_author">Кирмичи А.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>    
                                <span class="active"></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list_book">
                        <a href="book.html">
                        <img src="/images/Architecture.png" alt="Обложка" class="list_book_img">
                        <div class="list_book_name">Архитектура</div>
                        <div class="list_book_author">Леонардо Д. В.</div>
                        </a>
                        <div class="list_book_estimation">
                            <div class="list_book_estimation_rating">
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <div class="list_book_estimation_like">
                                <div class="heart fill-color"></div>
                            </div>
                        </div>
                    </div>
            </div>
            <img class="arrow rigth" id="right_3" src="/images/arrow-rigth.png" alt="">
        </div>
        
        <div class="btn">
            <a class="profile_bt_all" href="profile_favourites.html">Показать все</a>
        </div>
    </main>
