<main class="container">
        <div class="book_informations">
            <img src="/images/books/<?= $data['book'][0]['image'] ?>" alt="" class="list_book_img">
            <div class="book_information">
                <div class="book_information_name"><?= $data['book'][0]['name'] ?></div>
                <div class="book_information_properties">
                    <h3 class="book_information_properties_item">Автор:</h3>
                    <h3 class="book_information_properties_value"><?= $data['book'][0]['author'] ?></h3>
                </div>
                <div class="book_information_properties">
                    <h3 class="book_information_properties_item">Жанр:</h3>
                    <h3 class="book_information_properties_value">Художественная литература</h3>
                </div>
                <div class="book_information_properties">
                    <h3 class="book_information_properties_item">ISBN:</h3>
                    <h3 class="book_information_properties_value"><?= $data['book'][0]['ISBN'] ?></h3>
                </div>
                <div class="book_information_properties">
                    <h3 class="book_information_properties_item">Год издания:</h3>
                    <h3 class="book_information_properties_value"><?= $data['book'][0]['public_year'] ?></h3>
                </div>
                <div class="book_information_properties">
                    <h3 class="book_information_properties_item">Возрастные ограничения:</h3>
                    <h3 class="book_information_properties_value"><?= $data['book'][0]['censor'] ?></h3>
                </div>
                <div class="book_information_properties">
                    <h3 class="book_information_properties_item">Рейтинг:</h3>
                    <div class="list_book_estimation_rating" style="margin-top: 0%;">	
                        <? for ($i = 0; $i < $data['book'][0]['rate']; $i++) { ?>
                            <span class="active"></span>
                        <? } ?>
                    </div>
                </div>
                <div class="book_information_properties">
                    <h3 class="book_information_properties_item">Добавить в избранное:</h3>
                    <div class="list_book_estimation_like">
                        <div class="heart fill-color"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-book">
            <button id="add-to-collection-btn" class="add_book_col">Добавить в коллекцию</button>
        </div>

        <!-- Модальное окно с коллекциями  -->
        <div id="collection-modal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <h3 class="modal_content_title">Выберите коллекцию:</h3>
              <ul id="collection-list">
                <li>В гостях у психолога</li>
                <li>Пиратские истории</li>
                <li>Любимое фэнтези</li>
                <li>Чтиво на каждый день</li>
                <li>Мои книги</li>
              </ul>
            </div>
        </div>

        <!-- Статус чтения  -->
        <div class="book_description_title">Статус чтения</div>

        <div class="status-buttons">
            <div class="status-button">
                <input type="radio" id="read" name="status" value="read">
                <label for="read">Прочитано</label>
            </div>

            <div class="status-button">
                <input type="radio" id="reading" name="status" value="reading">
                <label for="reading">В процессе</label>
            </div>
            <div class="status-button">
                <input type="radio" id="abandoned" name="status" value="abandoned">
                <label for="abandoned">Заброшено</label>
            </div>
            <div class="status-button">
                <input type="radio" id="later" name="status" value="later">
                <label for="later">Прочитать позже</label>
            </div>
          </div>
        

        <!-- Описание книги  -->
        <div class="book_description">
            <div class="book_description_title">Описание</div>
            <div class="book_description_text">
                <?= $data['book'][0]['description'] ?>
            </div>
        </div>

        <!-- Рецензии книги  -->
        <div class="book_description_title">Рецензии</div>
        <a href="profile_review_create.html">
            <button class="add_book_col" style="margin-top: 30px;">Написать рецензию</button></a>
        <div class="reviews">
                <div class="book_review">
                    <div class="book_review_profile">bookworm</div>
                    <div class="book_review_text_back">
                        <div class="book_review_text">
                            <p>Было бы банальным говорить о том, что "Мастер и Маргарита" - загадочный роман. Я говорю об этом на лекциях уже более 15 лет. Но вот что удивительно: когда на душе сумятица, когда мне плохо, я открываю наугад любую страницу романа и попадаю именно на ту, где мне дается ответ, и настроение улучшается, и становится так хорошо, и я смеюсь и плачу от осознания того, что Булгаков и его роман - часть моей жизни, часть моего существования. Книга всегда рядом - только руку протяни, в ней столько закладок, столько пометок! Нет, не верю я тем людям, которые говорят, что роман не понравился - он просто не открылся для сознания и понимания этому читателю. До чтения романа надо дорасти! Вспоминается случай, когда я встретилась с моим любимым профессором, микробиологом Юрием Ивановичем Сорокиным, и он с таким воодушевлением рассказывал мне, как его сын Аркадий с друзьями всю ночь переписывал самиздатовские страницы романа "Мастер и Маргарита". Было это в 1979 году. Я тогда скромно смолчала и не сказала, что я тоже прочитала роман в самиздатовском исполнении. Прошли годы. Теперь у меня есть 4 издания романа, и я горжусь этим, горжусь тем, что мои коллеги приходят ко мне на лекции, записывают, конспектируют, а члены аттестационной комиссии (почтенные дамы) плакали, когда я рассказывала историю любви Мастера и Маргариты! Этот роман, несомненно, послан нам Богом!
                            </p>
                            <a href="profile_review_full.html" class="book_review_alltext">Читать полностью...</a>
                        </div>
                    </div>
                </div>
                <div class="book_review">
                    <div class="book_review_profile">dumplingg</div>
                    <div class="book_review_text_back">
                        <div class="book_review_text">
                            <p>Со мной приключилась странная болезнь : всё, что не берусь перечитывать приобретает совершенно иной смысл, зачастую совершенно противоположный первоначальному. Братья Карамазовы, Война и мир, Анна Каренина...И вот этот синдром добрался до Мастера и Маргариты. Я его читала летом, осталось ощущение того, что меня двинули кулаком в живот. Подумалось: стресс - перечитаю потом. И вот закончила перечитывать буквально на днях. Нет, тогда - летом - мне не показалось. Всё верно.
                                Попробую рассказать. В юности для меня это был, пожалуй, один из самых сокровенных романов об идеальной любви, о судьбе Мастера с безусловной параллелью с судьбой Булгакова и Елены.Роман о людях, о том, что для них важно.Ну, например, трусость - самый страшный порок; Мы говорим с тобой на разных языках, как всегда, но вещи, о которых мы говорим, от этого не меняются;Каждый украшает себя как может. И так далее.Разговаривать об этом романе я вообще не могла ни с кем очень долгое время: слишком сокровенное, слишком сильно брало за душу. От слов и я хочу, чтобы Фриде перестали подавать платок я просто начинала рыдать. Так продолжалось очень долгое время.
                                И вот я перечитала роман уже, в принципе, пережив немало в своей жизни: и потери, и приобретения, и радость, и горе, и разочарование, и любовь, и страсть - в общем стала взрослой. :)
                                И пришла я к выводу, что это был предсмертный роман. И сколько бы мне ни говорили, что он итог всего творчества Булгакова - неправда . Это роман умирающего человека, размышляющего о том, куда он попадёт после смерти. И попадёт ли куда-то вообще.Есть ли то место куда попадают после смерти.Словно человек смотрит в большое зеркало и пытается найти ответ на то, как он жил и чего достоин: наказания или награды. Каждая линия в романе отражение именно этого состояния поиска и ответов на этот в принципе один-единственный вопрос. Отражение Воланда, Пилата и реальности. И всё это проносится у Мастера, словно в калейдоскопе.
                            </p>
                            <a href="profile_review_full.html.html" class="book_review_alltext">Читать полностью...</a>
                        </div>
                    </div>
                </div>
                <div class="book_review">
                    <div class="book_review_profile">bookworm</div>
                    <div class="book_review_text_back">
                        <div class="book_review_text">
                            <p>Было бы банальным говорить о том, что "Мастер и Маргарита" - загадочный роман. Я говорю об этом на лекциях уже более 15 лет. Но вот что удивительно: когда на душе сумятица, когда мне плохо, я открываю наугад любую страницу романа и попадаю именно на ту, где мне дается ответ, и настроение улучшается, и становится так хорошо, и я смеюсь и плачу от осознания того, что Булгаков и его роман - часть моей жизни, часть моего существования. Книга всегда рядом - только руку протяни, в ней столько закладок, столько пометок! Нет, не верю я тем людям, которые говорят, что роман не понравился - он просто не открылся для сознания и понимания этому читателю. До чтения романа надо дорасти! Вспоминается случай, когда я встретилась с моим любимым профессором, микробиологом Юрием Ивановичем Сорокиным, и он с таким воодушевлением рассказывал мне, как его сын Аркадий с друзьями всю ночь переписывал самиздатовские страницы романа "Мастер и Маргарита". Было это в 1979 году. Я тогда скромно смолчала и не сказала, что я тоже прочитала роман в самиздатовском исполнении. Прошли годы. Теперь у меня есть 4 издания романа, и я горжусь этим, горжусь тем, что мои коллеги приходят ко мне на лекции, записывают, конспектируют, а члены аттестационной комиссии (почтенные дамы) плакали, когда я рассказывала историю любви Мастера и Маргариты! Этот роман, несомненно, послан нам Богом!
                            </p>
                            <a href="profile_review_full.html.html" class="book_review_alltext">Читать полностью...</a>
                        </div>
                    </div>
                </div>
                <div class="book_review">
                    <div class="book_review_profile">bookworm</div>
                    <div class="book_review_text_back">
                        <div class="book_review_text">
                            <p>Было бы банальным говорить о том, что "Мастер и Маргарита" - загадочный роман. Я говорю об этом на лекциях уже более 15 лет. Но вот что удивительно: когда на душе сумятица, когда мне плохо, я открываю наугад любую страницу романа и попадаю именно на ту, где мне дается ответ, и настроение улучшается, и становится так хорошо, и я смеюсь и плачу от осознания того, что Булгаков и его роман - часть моей жизни, часть моего существования. Книга всегда рядом - только руку протяни, в ней столько закладок, столько пометок! Нет, не верю я тем людям, которые говорят, что роман не понравился - он просто не открылся для сознания и понимания этому читателю. До чтения романа надо дорасти! Вспоминается случай, когда я встретилась с моим любимым профессором, микробиологом Юрием Ивановичем Сорокиным, и он с таким воодушевлением рассказывал мне, как его сын Аркадий с друзьями всю ночь переписывал самиздатовские страницы романа "Мастер и Маргарита". Было это в 1979 году. Я тогда скромно смолчала и не сказала, что я тоже прочитала роман в самиздатовском исполнении. Прошли годы. Теперь у меня есть 4 издания романа, и я горжусь этим, горжусь тем, что мои коллеги приходят ко мне на лекции, записывают, конспектируют, а члены аттестационной комиссии (почтенные дамы) плакали, когда я рассказывала историю любви Мастера и Маргариты! Этот роман, несомненно, послан нам Богом!
                            </p>
                            <a href="profile_review_full.html.html" class="book_review_alltext">Читать полностью...</a>
                        </div>
                    </div>
                </div>
                <div class="book_review">
                    <div class="book_review_profile">bookworm</div>
                    <div class="book_review_text_back">
                        <div class="book_review_text">
                            <p>Было бы банальным говорить о том, что "Мастер и Маргарита" - загадочный роман. Я говорю об этом на лекциях уже более 15 лет. Но вот что удивительно: когда на душе сумятица, когда мне плохо, я открываю наугад любую страницу романа и попадаю именно на ту, где мне дается ответ, и настроение улучшается, и становится так хорошо, и я смеюсь и плачу от осознания того, что Булгаков и его роман - часть моей жизни, часть моего существования. Книга всегда рядом - только руку протяни, в ней столько закладок, столько пометок! Нет, не верю я тем людям, которые говорят, что роман не понравился - он просто не открылся для сознания и понимания этому читателю. До чтения романа надо дорасти! Вспоминается случай, когда я встретилась с моим любимым профессором, микробиологом Юрием Ивановичем Сорокиным, и он с таким воодушевлением рассказывал мне, как его сын Аркадий с друзьями всю ночь переписывал самиздатовские страницы романа "Мастер и Маргарита". Было это в 1979 году. Я тогда скромно смолчала и не сказала, что я тоже прочитала роман в самиздатовском исполнении. Прошли годы. Теперь у меня есть 4 издания романа, и я горжусь этим, горжусь тем, что мои коллеги приходят ко мне на лекции, записывают, конспектируют, а члены аттестационной комиссии (почтенные дамы) плакали, когда я рассказывала историю любви Мастера и Маргариты! Этот роман, несомненно, послан нам Богом!
                            </p>
                            <a href="profile_review_full.html.html" class="book_review_alltext">Читать полностью...</a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="center">
            <button class="add_book_col show-more" style="margin-top: 30px;">Показать ещё</button>
        </div>

        <!-- Комметарии книги  -->
        <div class="book_description_title">Комментарии</div>

        <div class="book_commets">
            <div class="comment_section"></div>
            <div class="book_commet">
                <div class="book_comment_profile">
                    <img src="/images/ava.png" alt="" class="book_comment_profile_ava">
                </div>
                <div class="book_comment_text">
                    <div class="book_comment_text_nickname">bookworm</div>
                    <div class="book_comment_text_area">Очень крутая книга!!</div>
                </div>
            </div>
            <div class="book_commet">
                <div class="book_comment_profile">
                    <img src="/images/manga.jpg" alt="" class="book_comment_profile_ava">
                </div>
                <div class="book_comment_text">
                    <div class="book_comment_text_nickname">mister567</div>
                    <div class="book_comment_text_area">Не оторваться!!</div>
                </div>
            </div>
            <div class="book_commet">
                <div class="book_comment_profile">
                    <img src="/images/ava.png" alt="" class="book_comment_profile_ava">
                </div>
                <div class="book_comment_text">
                    <div class="book_comment_text_nickname">dumplingg</div>
                    <div class="book_comment_text_area">Очень крутая книга!!</div>
                </div>
            </div>
            <div class="book_commet">
                <div class="book_comment_profile">
                    <img src="/images/ava.png" alt="" class="book_comment_profile_ava">
                </div>
                <div class="book_comment_text">
                    <div class="book_comment_text_nickname">dumplingg</div>
                    <div class="book_comment_text_area">Очень крутая книга!!</div>
                </div>
            </div>
        </div>
        <div class="center">
            <button class="add_book_col show-more-com" style="margin-top: 30px;">Показать ещё</button>
        </div>
        
    
    <form class="send_com">
        <textarea name="" id="textarea_comment" class="textarea_com" placeholder="Напишите комментарий..." rows="5"></textarea>
        <div class="bt">
            <button class="add_book_col"  id="add_comment_button">Отправить</button>
        </div>
    </form>
    </main>


    <script src="js/reviews_more_in_collection.js" defer></script>
    <script src="js/book_add_collection.js" defer></script>
    <script src="js/send_com.js" defer></script>
    <script src="js/book_status.js" defer></script>