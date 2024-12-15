<?php
require('control/db.inc');
$select = "select * from commit";
$selRes = $conn->query($select);

$count = "SELECT COUNT(*) AS 'count' FROM commit";
$countRes = $conn->query($count);
$counts = $countRes->fetch(PDO::FETCH_ASSOC);
?>
<div class="modalBlock" id="modalBlock">
    <div class="overlay" id="overlay"></div>
    <form action="../control/review.php" method="post" class="modal">
        <button class="closeBtn" type="button" id="closeModal">&#10006;</button>
        <div class="mb-3">
            <div class="rating-area">
                <input type="radio" id="star-5" name="rating" value="5">
                <label for="star-5" title="Оценка «5»"></label>	
                <input type="radio" id="star-4" name="rating" value="4">
                <label for="star-4" title="Оценка «4»"></label>    
                <input type="radio" id="star-3" name="rating" value="3">
                <label for="star-3" title="Оценка «3»"></label>  
                <input type="radio" id="star-2" name="rating" value="2">
                <label for="star-2" title="Оценка «2»"></label>    
                <input type="radio" id="star-1" name="rating" value="1">
                <label for="star-1" title="Оценка «1»"></label>
            </div>
            <label for="exampleFormControlTextarea1" class="form-label">Комментарий:</label>
            <textarea name="review" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="submit" class="btnProductBlack">Отправить</button>
        </div>
    </form>
</div>      



<div class="container">
    <div class="topFilter" id="topMargin">
        <span>Главная > Разделочные ножи > <b>Нож Снегирь</b></span>
    </div>
    <div class="cardBlock"><!-- Блок с фото и короткой инфой о товаре -->
        <div class="infoCard"><!-- времено --><!-- Картинки -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/item1.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/item1.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/item1.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/item1.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/item1.png" class="d-block w-100">
                    </div>
                </div>
            </div>
            <div class="imgsBlock">
                <div class="imgs">
                    <img src="../img/item2.png" class="d-block w-100">
                </div>
                <div class="imgs">
                    <img src="../img/item3.png" class="d-block w-100">
                </div>
                <div class="imgs">
                    <img src="../img/item4.png" class="d-block w-100">
                </div>
                <div class="imgs">
                    <img src="../img/item5.png" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="infoCard"><!-- Инфа -->
            <div>
                <div class="betweenBlock">
                    <div class="betweenBlock" style="width: 54%;">
                        <h3 class="h3Bleck">Нож Снегирь</h3>
                        <svg width="150" height="22" viewBox="0 0 150 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11 0L13.4697 7.60081H21.4616L14.996 12.2984L17.4656 19.8992L11 15.2016L4.53436 19.8992L7.00402 12.2984L0.538379 7.60081H8.53035L11 0Z" fill="#E8AA31"/>
    <path d="M43 0L45.4697 7.60081H53.4616L46.996 12.2984L49.4656 19.8992L43 15.2016L36.5344 19.8992L39.004 12.2984L32.5384 7.60081H40.5303L43 0Z" fill="#E8AA31"/>
    <path d="M75 0L77.4697 7.60081H85.4616L78.996 12.2984L81.4656 19.8992L75 15.2016L68.5344 19.8992L71.004 12.2984L64.5384 7.60081H72.5303L75 0Z" fill="#E8AA31"/>
    <path d="M107 0L109.47 7.60081H117.462L110.996 12.2984L113.466 19.8992L107 15.2016L100.534 19.8992L103.004 12.2984L96.5384 7.60081H104.53L107 0Z" fill="#E8AA31"/>
    <path d="M139 0L141.47 7.60081H149.462L142.996 12.2984L145.466 19.8992L139 15.2016L132.534 19.8992L135.004 12.2984L128.538 7.60081H136.53L139 0Z" fill="#E8AA31"/>
                        </svg>
                    </div>
                    <div>
                        <svg width="85" height="26" viewBox="0 0 85 26" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M26.9541 13.0094L26.9311 13.0208L23.0576 3.38002H24.8251C25.142 3.38002 25.3989 3.12308 25.3989 2.80616C25.3989 2.48925 25.142 2.23231 24.8251 2.23231H14.0251V0.573858C14.0251 0.256945 13.7681 0 13.4512 0C13.1343 0 12.8774 0.256945 12.8774 0.573858V2.22657H2.0831C1.76619 2.22657 1.50925 2.48351 1.50925 2.80043C1.50925 3.11734 1.76619 3.37428 2.0831 3.37428H3.92519L0.0459086 13.0094C0.0172157 13.0766 0.00164984 13.1487 0 13.2217C0 15.857 2.13633 17.9933 4.77163 17.9933C7.40692 17.9933 9.54325 15.857 9.54325 13.2217C9.5416 13.1487 9.52604 13.0766 9.49734 13.0094L5.6238 3.36854H12.8774V21.1122C10.1401 21.3188 7.99957 22.983 7.99957 24.9972C7.99957 25.3142 8.25652 25.5711 8.57343 25.5711H18.329C18.6459 25.5711 18.9029 25.3142 18.9029 24.9972C18.9029 22.983 16.7624 21.3188 14.0251 21.1122V3.36854H21.3532L17.5027 13.0094C17.474 13.0766 17.4584 13.1487 17.4567 13.2217C17.4567 15.857 19.5931 17.9933 22.2284 17.9933C24.8637 17.9933 27 15.857 27 13.2217C26.9984 13.1487 26.9828 13.0766 26.9541 13.0094ZM4.76876 16.8542C2.99138 16.8518 1.47768 15.5616 1.19362 13.807H8.32094C8.03831 15.553 6.53746 16.8406 4.76876 16.8542ZM8.11435 12.6593H1.43464L4.78023 4.33263L8.11435 12.6593ZM17.6519 24.4234H9.24485C9.6695 23.1896 11.4198 22.237 13.4455 22.237C15.4712 22.237 17.2272 23.1896 17.6519 24.4234ZM22.2025 4.33836L25.5367 12.6593H18.857L22.2025 4.33836ZM22.2025 16.8542V16.8599C20.432 16.8458 18.9305 15.5553 18.6504 13.807H25.7777C25.4936 15.5616 23.9799 16.8518 22.2025 16.8542Z" fill="black"/>
    <path d="M76.5426 0C74.2252 0 72.0558 0.980887 70.6114 2.62435C69.1671 0.980831 66.9978 0 64.6803 0C60.4454 0 57 3.22087 57 7.17994C57 10.2801 58.9774 13.8658 62.8772 17.8376C65.8783 20.8942 69.1431 23.2608 70.0722 23.9134L70.6113 24.292L71.1503 23.9134C72.0794 23.2609 75.3443 20.8943 78.3456 17.8378C82.2454 13.8659 84.2229 10.2801 84.2229 7.17994C84.2229 3.22087 80.7775 0 76.5426 0ZM77.0232 16.703C74.5547 19.217 71.8989 21.2494 70.6113 22.186C69.3237 21.2494 66.668 19.217 64.1995 16.7029C60.6638 13.102 58.7949 9.80893 58.7949 7.17994C58.7949 4.14616 61.4351 1.67797 64.6803 1.67797C66.8159 1.67797 68.7878 2.76608 69.8265 4.51772L70.6114 5.84142L71.3964 4.51772C72.435 2.76614 74.4069 1.67797 76.5426 1.67797C79.7878 1.67797 82.428 4.14611 82.428 7.17994C82.428 9.80904 80.5591 13.1021 77.0232 16.703Z" fill="#E8AA31"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="greenInfo">В наличии</p>
                </div>
            </div>
            <hr>
            <div class="leftBlock">
                <div>
                    <div class="selectDiv">Артикул:</div>
                    <div class="selectDiv">Торговая марка:</div>
                    <div class="selectDiv">Серия:</div>
                    <div class="selectDiv">Бонусные баллы:</div>
                </div>
                <div>
                    <div class="infoP selectDiv">AF0000001952</div>
                    <div class="infoP selectDiv">WUESTHOF (Германия)</div>
                    <div class="infoP selectDiv">Ножи серии Class Ikon</div>
                    <div class="infoP selectDiv">38</div>
                </div>
            </div>
            <hr>
            <div class="leftBlock">
                <div>
                    <div class="selectDiv">Сталь</div>
                    <div class="selectDiv">Рукоять</div>
                    <div class="selectDiv">Гарда и тыльник</div>
                    <div class="selectDiv">Обработка клинка</div>
                </div>
                <div class="selectBlock">
                    <div class="selectDiv">
                        <select>
                            <option value="">Выбрать сталь</option>
                            <option value="">сталь dfjgf12</option>
                            <option value="">сталь c536</option>
                            <option value="">сталь lho974</option>
                        </select>
                    </div>
                    <div class="selectDiv">
                        <select>
                            <option value="">Выбрать рукоять</option>
                            <option value="">рукоять стд</option>
                            <option value="">рукоять сд</option>
                            <option value="">рукоять сытд</option>
                        </select>
                    </div>
                    <div class="selectDiv">
                        <select>
                            <option value="">Выбрать гарду и тыльник</option>
                            <option value="">гарда и тыльник 123</option>
                            <option value="">гарда и тыльник пку34</option>
                            <option value="">гарда и тыльник ошрцщ3</option>
                        </select>
                    </div>
                    <div class="selectDiv">
                        <select>
                            <option value="">Выбрать обработку клинка</option>
                            <option value="">обработка клинка кислотой</option>
                            <option value="">обработка клинка еще чем-то</option>
                            <option value="">обработка клинка и еще чем-то</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <div class="betweenBlock">
                    <div>
                        <h2>3 865 &#8381;</h2>
                    </div>
                    <div class="info">
                        +449 баллов за покупку
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="9.5" cy="9.5" r="9.5" fill="#141414" fill-opacity="0.3"/>
<path d="M8.736 11.348C8.736 11.028 8.788 10.748 8.892 10.508C9.004 10.26 9.136 10.052 9.288 9.884C9.448 9.716 9.656 9.516 9.912 9.284C10.232 9.004 10.468 8.764 10.62 8.564C10.772 8.356 10.848 8.108 10.848 7.82C10.848 7.428 10.696 7.116 10.392 6.884C10.088 6.644 9.668 6.524 9.132 6.524C8.196 6.524 7.48 6.84 6.984 7.472L6.108 6.848C6.444 6.416 6.872 6.084 7.392 5.852C7.92 5.62 8.528 5.504 9.216 5.504C10.088 5.504 10.78 5.696 11.292 6.08C11.804 6.456 12.06 6.976 12.06 7.64C12.06 7.968 12.004 8.26 11.892 8.516C11.788 8.764 11.66 8.972 11.508 9.14C11.356 9.308 11.152 9.508 10.896 9.74C10.568 10.036 10.324 10.296 10.164 10.52C10.012 10.744 9.936 11.02 9.936 11.348H8.736ZM9.348 14.072C9.124 14.072 8.936 14 8.784 13.856C8.64 13.704 8.568 13.52 8.568 13.304C8.568 13.088 8.64 12.908 8.784 12.764C8.936 12.612 9.124 12.536 9.348 12.536C9.572 12.536 9.756 12.612 9.9 12.764C10.044 12.908 10.116 13.088 10.116 13.304C10.116 13.52 10.04 13.704 9.888 13.856C9.744 14 9.564 14.072 9.348 14.072Z" fill="black"/>
                        </svg>
                    </div>
                </div>
                <div class="betweenBlock">
                    <div class="number">
                        <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>
                        <input type="number" min="0" max="10" value="1" readonly>
                        <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>
                    </div>
                    <div class="betweenBlock" id="betweenBtn">
                        <button type="button" class="btnProduct" id="btnCardInfo">
                            В корзину
                        </button>
                        <button type="button" class="btnProductBlack">
                            Купить в 1 клик
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infoText"><!-- использовать бутстрап для характеристики и полной инфы об товаре -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Описание</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Характеристика</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Отзывы</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-block-tab" data-bs-toggle="pill" data-bs-target="#pills-block" type="button" role="tab" aria-controls="pills-block" aria-selected="false">Доставка</button>
            </li>
        </ul>
        <hr>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <p>Легкий удобный <b>нож с клинком,</b> имеющим пологие вогнутые линзовидные спуски <b>на две трети ширины клинка,</b> образующие тонкое, прекрасно режущее лезвие толщиной <b>около 0,6 мм</b> в районе подводов.</p>
                <p><b>Обух клинка со спинкой рукояти</b> имеет одну плавную дугообразную линию. На пяте перед рукоятью есть подпальцевый <b>вырез для точных работ.</b></p>
                <p>Необходимо проявлять некоторую осторожность при работе с большими боковыми нагрузками <b>на лезвие ножа,</b> ввиду небольшой толщины клинка в рабочей части.</p>
                <p>Монтаж рукояти накладной <b>плашечный.</b> На навершии рукояти, функцию которого выполняет выступающий из под плашек хвостовик, имеется <b>отверстие под темляк.</b> Этот нож удобный помощник при работе <b>с продуктами и охоте на боровую и водоплавающую дичь.</b></p>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="blockInfo">
                    <div class="boxInfo">
                        <div>
                            <h4>Технические характеристики</h4>
                        </div>
                        <div class="leftBlock">
                            <div class="marfinR">
                                <p>Общая длина, мм:</p>
                                <p>Длина клинка, мм:</p>
                                <p>Ширина клинка, мм:</p>
                                <p>Толщина обуха, мм:</p>
                            </div>
                            <div class="marfinR">
                                <p>227</p>
                                <p>112</p>
                                <p>24</p>
                                <p>2.9</p>
                            </div>
                        </div>
                    </div>
                    <div class="verticalHR"></div>
                    <div class="boxInfo">
                        <h4>Используемые материалы</h4>
                        <div class="leftBlock">
                            <div class="marfinR">
                                <p>Сталь:</p>
                                <p>Рукоять:</p>
                            </div>
                            <div class="marfinR">
                                <p>95Х18</p>
                                <p>Накладки карельская береза</p>
                            </div>
                        </div>                    
                    </div>
                    <div class="verticalHR"></div>
                    <div class="boxInfo">
                        <h4>Производство</h4>
                        <div class="leftBlock">
                            <div class="marfinR">
                                <p>Производство:</p>
                            </div>
                            <div class="marfinR">
                                <p>АиР</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <?php
            if($counts['count']==0){
                echo '
                    <div class="betweenBlock">
                        <div>
                            У данного товара нет отзывов. Станьте первым, кто оставил отзыв об этом товаре!
                        </div>
                    </div>   
                ';
            }else{
                echo '<div class="commitBox">';
                while ($commits = $selRes->fetch(PDO::FETCH_ASSOC)){
                    if ($commits['email_user']!="guost"){
                        $sql = "select * from user where email = '".$commits['email_user']."'";
                        $sqlRes = $conn->query($sql);
                        $user = $sqlRes->fetch(PDO::FETCH_ASSOC);
                        $name=$user['name'];
                    }else{
                        $name="guost";
                    } 
                    echo '
                        <div class="commitBlock">
                            <img src="" class="commitAva" alt="Аватар пользователя">
                            <div class="commitContent">
                                <div class="betweenBlock">
                                    <div class="nameUser">'.$name.'</div>
                                    <div class="date">'.$commits['date_commit'].'</div>
                                </div>
                                <div>
                                    ';
                                    for ($i=0; $i<$commits['grade_commit']; $i++){
                                       echo ' <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 0L13.4697 7.60081H21.4616L14.996 12.2984L17.4656 19.8992L11 15.2016L4.53436 19.8992L7.00402 12.2984L0.538379 7.60081H8.53035L11 0Z" fill="#E8AA31"/>
                                            </svg>';
                                    }
                                    echo '
                                </div>
                                <div class="commitText">
                                    '.$commits['name_commit'].'
                                </div>
                                <div class="betweenBlock">
                                    <button type="button" class="commitBtn">
                                        Ответить
                                    </button>
                                    <div>
                                        <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5426 0C17.2252 0 15.0558 0.980887 13.6114 2.62435C12.1671 0.980831 9.9978 0 7.68033 0C3.4454 0 0 3.22087 0 7.17994C0 10.2801 1.9774 13.8658 5.87715 17.8376C8.87831 20.8942 12.1431 23.2608 13.0722 23.9134L13.6113 24.292L14.1503 23.9134C15.0794 23.2609 18.3443 20.8943 21.3456 17.8378C25.2454 13.8659 27.2229 10.2801 27.2229 7.17994C27.2229 3.22087 23.7775 0 19.5426 0ZM20.0232 16.703C17.5547 19.217 14.8989 21.2494 13.6113 22.186C12.3237 21.2494 9.66802 19.217 7.19947 16.7029C3.66378 13.102 1.79492 9.80893 1.79492 7.17994C1.79492 4.14616 4.43512 1.67797 7.68033 1.67797C9.81592 1.67797 11.7878 2.76608 12.8265 4.51772L13.6114 5.84142L14.3964 4.51772C15.435 2.76614 17.4069 1.67797 19.5426 1.67797C22.7878 1.67797 25.428 4.14611 25.428 7.17994C25.428 9.80904 23.559 13.1021 20.0232 16.703Z" fill="#E8AA31"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    ';
                }    
                echo '</div>';
            }
            ?>
                <button type="button" class="btnProductBlack" id="openModal">
                    Написать отзыв
                </button>
            </div>
            <div class="tab-pane fade" id="pills-block" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="leftBlock">
                    <div>
                        <div class="selectDiv">Ваша страна</div>
                        <div class="selectDiv">Ваш город</div>
                    </div>
                    <div>
                        <div class="selectDiv">
                            <select>
                                <option value="">Выбрать страну</option>
                                <option value="">Россия</option>
                                <option value="">Беларусь</option>
                                <option value="">Казахстан</option>
                            </select>
                        </div>
                        <div class="selectDiv">
                            <select>
                                <option value="">Выбрать город</option>
                                <option value="">Москва</option>
                                <option value="">Минск</option>
                                <option value="">Астана</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div><!-- end infoText -->

    <!-- Тут для мобилок меньше 500px акардион -->
    <div class="accordionMin">
        <button class="accordion" >Описание</button>
        <div class="panel" >
            <p>Легкий удобный <b>нож с клинком,</b> имеющим пологие вогнутые линзовидные спуски <b>на две трети ширины клинка,</b> образующие тонкое, прекрасно режущее лезвие толщиной <b>около 0,6 мм</b> в районе подводов.</p>
            <p><b>Обух клинка со спинкой рукояти</b> имеет одну плавную дугообразную линию. На пяте перед рукоятью есть подпальцевый <b>вырез для точных работ.</b></p>
            <p>Необходимо проявлять некоторую осторожность при работе с большими боковыми нагрузками <b>на лезвие ножа,</b> ввиду небольшой толщины клинка в рабочей части.</p>
            <p>Монтаж рукояти накладной <b>плашечный.</b> На навершии рукояти, функцию которого выполняет выступающий из под плашек хвостовик, имеется <b>отверстие под темляк.</b> Этот нож удобный помощник при работе <b>с продуктами и охоте на боровую и водоплавающую дичь.</b></p>
        </div>

        <button class="accordion">Характеристики</button>
        <div class="panel">
            <div class="blockInfo">
                <div class="boxInfo">
                    <div>
                        <h4>Технические характеристики</h4>
                    </div>
                    <div class="leftBlock">
                        <div class="marfinR">
                            <p>Общая длина, мм:</p>
                            <p>Длина клинка, мм:</p>
                            <p>Ширина клинка, мм:</p>
                            <p>Толщина обуха, мм:</p>
                        </div>
                        <div class="marfinR">
                            <p>227</p>
                            <p>112</p>
                            <p>24</p>
                            <p>2.9</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="boxInfo">
                    <h4>Используемые материалы</h4>
                    <div class="leftBlock">
                        <div class="marfinR">
                            <p>Сталь:</p>
                            <p>Рукоять:</p>
                        </div>
                        <div class="marfinR">
                            <p>95Х18</p>
                            <p>Накладки карельская береза</p>
                        </div>
                    </div>                    
                </div>
                <hr>
                <div class="boxInfo">
                    <h4>Производство</h4>
                    <div class="leftBlock">
                        <div class="marfinR">
                            <p>Производство:</p>
                        </div>
                        <div class="marfinR">
                            <p>АиР</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="accordion">Отзывы</button>
        <div class="panel">
            <?php
            if($counts['count']==0){
                echo '
                    <div class="betweenBlock">
                        <div>
                            У данного товара нет отзывов. Станьте первым, кто оставил отзыв об этом товаре!
                        </div>
                        <button type="button" class="btnProductBlack" id="openModalMobile">
                            Написать отзыв
                        </button>
                    </div>   
                ';
            }else{
                echo '<div class="commitBox">';
                while ($commits = $selRes->fetch(PDO::FETCH_ASSOC)){
                    if ($commits['email_user']!="guost"){
                        $sql = "select * from user where email = '".$commits['email_user']."'";
                        $sqlRes = $conn->query($sql);
                        $user = $sqlRes->fetch(PDO::FETCH_ASSOC);
                        $name=$user['name'];
                    }else{
                        $name="guost";
                    } 
                    echo '
                        <div class="commitBlock">
                            <img>
                            <div class="commitContent">
                                <div class="betweenBlock">
                                    <div>'.$name.'</div>
                                    <div>'.$commits['date_commit'].'</div>
                                </div>
                                <div>
                                    raite
                                    ';
                                    for ($i=0; $i<$commits['grade_commit']; $i++){
                                       echo ' <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 0L13.4697 7.60081H21.4616L14.996 12.2984L17.4656 19.8992L11 15.2016L4.53436 19.8992L7.00402 12.2984L0.538379 7.60081H8.53035L11 0Z" fill="#E8AA31"/>
                                            </svg>';
                                    }
                                    echo '
                                </div>
                                <div>
                                    '.$commits['name_commit'].'
                                </div>
                                <div class="betweenBlock">
                                    <button type="button" >
                                        Ответить
                                    </button>
                                    <div>
                                        <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5426 0C17.2252 0 15.0558 0.980887 13.6114 2.62435C12.1671 0.980831 9.9978 0 7.68033 0C3.4454 0 0 3.22087 0 7.17994C0 10.2801 1.9774 13.8658 5.87715 17.8376C8.87831 20.8942 12.1431 23.2608 13.0722 23.9134L13.6113 24.292L14.1503 23.9134C15.0794 23.2609 18.3443 20.8943 21.3456 17.8378C25.2454 13.8659 27.2229 10.2801 27.2229 7.17994C27.2229 3.22087 23.7775 0 19.5426 0ZM20.0232 16.703C17.5547 19.217 14.8989 21.2494 13.6113 22.186C12.3237 21.2494 9.66802 19.217 7.19947 16.7029C3.66378 13.102 1.79492 9.80893 1.79492 7.17994C1.79492 4.14616 4.43512 1.67797 7.68033 1.67797C9.81592 1.67797 11.7878 2.76608 12.8265 4.51772L13.6114 5.84142L14.3964 4.51772C15.435 2.76614 17.4069 1.67797 19.5426 1.67797C22.7878 1.67797 25.428 4.14611 25.428 7.17994C25.428 9.80904 23.559 13.1021 20.0232 16.703Z" fill="#E8AA31"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    ';
                }    
                echo '
                <button type="button" class="btnProductBlack" id="openModalMobile">
                    Написать отзыв
                </button>
                </div>';
            }
            ?>
        </div>

        <button class="accordion">Доставка</button>
        <div class="panel">
            <div class="leftBlock">
                <div>
                    <div class="selectDiv">Ваша страна</div>
                    <div class="selectDiv">Ваш город</div>
                </div>
                <div>
                    <div class="selectDiv">
                        <select>
                            <option value="">Выбрать страну</option>
                            <option value="">Россия</option>
                            <option value="">Беларусь</option>
                            <option value="">Казахстан</option>
                        </select>
                    </div>
                    <div class="selectDiv">
                        <select>
                            <option value="">Выбрать город</option>
                            <option value="">Москва</option>
                            <option value="">Минск</option>
                            <option value="">Астана</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="listBlock">
        <h3 class="h3Bleck">Похожие товары</h3>
        <div class="list">
        <?php
            require('control/db.inc');
            $query = "select * from product;";
            $result = $conn->query($query);
            $n = $result->fetch(PDO::FETCH_ASSOC);
            for ($i=0; $i<4; $i++){
                echo '
                    <div class="imgBlock">
                        <img class="imgProduct" src="img/'.$n["img"].'.jpg">
                        <div class="infoProductBlock">
                            <h3>'.$n["name"].'</h3>
                            <div class="infoProduct">
                                <span>'.$n["size"].'</span>
                                <span>'.$n["description"].'</span>
                            </div>
                            <div class="infoProduct">
                                <span><!-- звездочки -->
                                    <svg width="150" height="22" viewBox="0 0 150 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11 0L13.4697 7.60081H21.4616L14.996 12.2984L17.4656 19.8992L11 15.2016L4.53436 19.8992L7.00402 12.2984L0.538379 7.60081H8.53035L11 0Z" fill="#E8AA31"/>
    <path d="M43 0L45.4697 7.60081H53.4616L46.996 12.2984L49.4656 19.8992L43 15.2016L36.5344 19.8992L39.004 12.2984L32.5384 7.60081H40.5303L43 0Z" fill="#E8AA31"/>
    <path d="M75 0L77.4697 7.60081H85.4616L78.996 12.2984L81.4656 19.8992L75 15.2016L68.5344 19.8992L71.004 12.2984L64.5384 7.60081H72.5303L75 0Z" fill="#E8AA31"/>
    <path d="M107 0L109.47 7.60081H117.462L110.996 12.2984L113.466 19.8992L107 15.2016L100.534 19.8992L103.004 12.2984L96.5384 7.60081H104.53L107 0Z" fill="#E8AA31"/>
    <path d="M139 0L141.47 7.60081H149.462L142.996 12.2984L145.466 19.8992L139 15.2016L132.534 19.8992L135.004 12.2984L128.538 7.60081H136.53L139 0Z" fill="#E8AA31"/>
    </svg>

                                </span>
                                <span>12 отзывов</span>
                            </div>
                            <hr>
                            <div class="infoProduct">
                                <div>'.$n["price"].' р.</div>
                                <span>
                                <!-- весы -->
                                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M25.9558 12.5275L25.9337 12.5386L22.2036 3.25484H23.9056C24.2108 3.25484 24.4582 3.00741 24.4582 2.70223C24.4582 2.39706 24.2108 2.14963 23.9056 2.14963H13.5056V0.552604C13.5056 0.247428 13.2582 0 12.953 0C12.6479 0 12.4004 0.247428 12.4004 0.552604V2.1441H2.00595C1.70078 2.1441 1.45335 2.39153 1.45335 2.69671C1.45335 3.00188 1.70078 3.24931 2.00595 3.24931H3.77981L0.0442083 12.5275C0.0165781 12.5922 0.00158874 12.6617 0 12.732C0 15.2697 2.0572 17.3269 4.5949 17.3269C7.13259 17.3269 9.1898 15.2697 9.1898 12.732C9.18821 12.6617 9.17322 12.5922 9.14559 12.5275L5.41552 3.24378H12.4004V20.3303C9.76451 20.5292 7.70329 22.1318 7.70329 24.0714C7.70329 24.3766 7.95072 24.624 8.2559 24.624H17.6502C17.9553 24.624 18.2028 24.3766 18.2028 24.0714C18.2028 22.1318 16.1416 20.5292 13.5056 20.3303V3.24378H20.5624L16.8544 12.5275C16.8268 12.5922 16.8118 12.6617 16.8102 12.732C16.8102 15.2697 18.8674 17.3269 21.4051 17.3269C23.9428 17.3269 26 15.2697 26 12.732C25.9984 12.6617 25.9834 12.5922 25.9558 12.5275ZM4.59214 16.23C2.88058 16.2276 1.42295 14.9852 1.14942 13.2956H8.01275C7.74059 14.977 6.29533 16.2168 4.59214 16.23ZM7.81382 12.1904H1.38151L4.60319 4.17216L7.81382 12.1904ZM16.9981 23.5188H8.90244C9.31137 22.3307 10.9968 21.4134 12.9475 21.4134C14.8982 21.4134 16.5892 22.3307 16.9981 23.5188ZM21.3802 4.17768L24.5909 12.1904H18.1586L21.3802 4.17768ZM21.3802 16.23V16.2355C19.6752 16.2219 18.2294 14.9792 17.9596 13.2956H24.823C24.5494 14.9852 23.0918 16.2276 21.3802 16.23Z" fill="black"/>
    </svg>
                                <!-- сердечко -->
                                <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M20.1004 0C17.7169 0 15.4856 1.00889 14 2.69927C12.5144 1.00883 10.2832 0 7.89957 0C3.54375 0 0 3.31281 0 7.3849C0 10.5735 2.03385 14.2616 6.04492 18.3468C9.13175 21.4906 12.4897 23.9248 13.4454 24.596L13.9998 24.9854L14.5543 24.5961C15.5099 23.9249 18.868 21.4907 21.9549 18.347C25.9661 14.2618 28 10.5736 28 7.3849C28 3.31281 24.4562 0 20.1004 0ZM20.5948 17.1798C18.0558 19.7656 15.3242 21.8559 13.9998 22.8193C12.6755 21.8559 9.944 19.7656 7.40498 17.1797C3.76837 13.476 1.84615 10.0889 1.84615 7.3849C1.84615 4.26452 4.56172 1.72587 7.89957 1.72587C10.0961 1.72587 12.1243 2.84504 13.1927 4.64668L14 6.00817L14.8073 4.64668C15.8756 2.8451 17.9038 1.72587 20.1004 1.72587C23.4383 1.72587 26.1538 4.26446 26.1538 7.3849C26.1538 10.0891 24.2316 13.4761 20.5948 17.1798Z" fill="#E8AA31"/>
    </svg>

                                </span>
                            </div>
                        </div>
                        <button type="button" class="btnProduct">В корзину 
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M4.14005 4.42146H16.6916C17.3507 4.42146 17.8296 5.04797 17.6565 5.68396L16.9778 8.17874C16.6225 9.48483 15.4366 10.3912 14.0831 10.3912H5.24054M0 1H2.00252C2.97824 1 3.81154 1.70406 3.97445 2.66608L5.47496 11.5273C5.63787 12.4893 6.47118 13.1934 7.44689 13.1934H16.3759" stroke="white" stroke-width="1.5"/>
    <path d="M8.84137 16.6992C8.84137 17.1897 8.42828 17.6193 7.87882 17.6193C7.32936 17.6193 6.91626 17.1897 6.91626 16.6992C6.91626 16.2086 7.32936 15.7791 7.87882 15.7791C8.42828 15.7791 8.84137 16.2086 8.84137 16.6992Z" stroke="white" stroke-width="1.5"/>
    <path d="M16.3768 16.6992C16.3768 17.1897 15.9637 17.6193 15.4142 17.6193C14.8648 17.6193 14.4517 17.1897 14.4517 16.6992C14.4517 16.2086 14.8648 15.7791 15.4142 15.7791C15.9637 15.7791 16.3768 16.2086 16.3768 16.6992Z" stroke="white" stroke-width="1.5"/>
    </svg>

                        </button>
                    </div>
                ';
            }
        ?>
        </div>
    </div>

    <div class="listBlock">
        <h3 class="h3Bleck">Рекомендуем</h3>
        <div class="list">
        <?php
            require('control/db.inc');
            $query = "select * from product;";
            $result = $conn->query($query);
            $n = $result->fetch(PDO::FETCH_ASSOC);
            for ($i=0; $i<4; $i++){
                echo '
                    <div class="imgBlock">
                        <img class="imgProduct" src="img/'.$n["img"].'.jpg">
                        <div class="infoProductBlock">
                            <h3>'.$n["name"].'</h3>
                            <div class="infoProduct">
                                <span>'.$n["size"].'</span>
                                <span>'.$n["description"].'</span>
                            </div>
                            <div class="infoProduct">
                                <span><!-- звездочки -->
                                    <svg width="150" height="22" viewBox="0 0 150 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11 0L13.4697 7.60081H21.4616L14.996 12.2984L17.4656 19.8992L11 15.2016L4.53436 19.8992L7.00402 12.2984L0.538379 7.60081H8.53035L11 0Z" fill="#E8AA31"/>
    <path d="M43 0L45.4697 7.60081H53.4616L46.996 12.2984L49.4656 19.8992L43 15.2016L36.5344 19.8992L39.004 12.2984L32.5384 7.60081H40.5303L43 0Z" fill="#E8AA31"/>
    <path d="M75 0L77.4697 7.60081H85.4616L78.996 12.2984L81.4656 19.8992L75 15.2016L68.5344 19.8992L71.004 12.2984L64.5384 7.60081H72.5303L75 0Z" fill="#E8AA31"/>
    <path d="M107 0L109.47 7.60081H117.462L110.996 12.2984L113.466 19.8992L107 15.2016L100.534 19.8992L103.004 12.2984L96.5384 7.60081H104.53L107 0Z" fill="#E8AA31"/>
    <path d="M139 0L141.47 7.60081H149.462L142.996 12.2984L145.466 19.8992L139 15.2016L132.534 19.8992L135.004 12.2984L128.538 7.60081H136.53L139 0Z" fill="#E8AA31"/>
    </svg>

                                </span>
                                <span>12 отзывов</span>
                            </div>
                            <hr>
                            <div class="infoProduct">
                                <div>'.$n["price"].' р.</div>
                                <span>
                                <!-- весы -->
                                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M25.9558 12.5275L25.9337 12.5386L22.2036 3.25484H23.9056C24.2108 3.25484 24.4582 3.00741 24.4582 2.70223C24.4582 2.39706 24.2108 2.14963 23.9056 2.14963H13.5056V0.552604C13.5056 0.247428 13.2582 0 12.953 0C12.6479 0 12.4004 0.247428 12.4004 0.552604V2.1441H2.00595C1.70078 2.1441 1.45335 2.39153 1.45335 2.69671C1.45335 3.00188 1.70078 3.24931 2.00595 3.24931H3.77981L0.0442083 12.5275C0.0165781 12.5922 0.00158874 12.6617 0 12.732C0 15.2697 2.0572 17.3269 4.5949 17.3269C7.13259 17.3269 9.1898 15.2697 9.1898 12.732C9.18821 12.6617 9.17322 12.5922 9.14559 12.5275L5.41552 3.24378H12.4004V20.3303C9.76451 20.5292 7.70329 22.1318 7.70329 24.0714C7.70329 24.3766 7.95072 24.624 8.2559 24.624H17.6502C17.9553 24.624 18.2028 24.3766 18.2028 24.0714C18.2028 22.1318 16.1416 20.5292 13.5056 20.3303V3.24378H20.5624L16.8544 12.5275C16.8268 12.5922 16.8118 12.6617 16.8102 12.732C16.8102 15.2697 18.8674 17.3269 21.4051 17.3269C23.9428 17.3269 26 15.2697 26 12.732C25.9984 12.6617 25.9834 12.5922 25.9558 12.5275ZM4.59214 16.23C2.88058 16.2276 1.42295 14.9852 1.14942 13.2956H8.01275C7.74059 14.977 6.29533 16.2168 4.59214 16.23ZM7.81382 12.1904H1.38151L4.60319 4.17216L7.81382 12.1904ZM16.9981 23.5188H8.90244C9.31137 22.3307 10.9968 21.4134 12.9475 21.4134C14.8982 21.4134 16.5892 22.3307 16.9981 23.5188ZM21.3802 4.17768L24.5909 12.1904H18.1586L21.3802 4.17768ZM21.3802 16.23V16.2355C19.6752 16.2219 18.2294 14.9792 17.9596 13.2956H24.823C24.5494 14.9852 23.0918 16.2276 21.3802 16.23Z" fill="black"/>
    </svg>
                                <!-- сердечко -->
                                <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M20.1004 0C17.7169 0 15.4856 1.00889 14 2.69927C12.5144 1.00883 10.2832 0 7.89957 0C3.54375 0 0 3.31281 0 7.3849C0 10.5735 2.03385 14.2616 6.04492 18.3468C9.13175 21.4906 12.4897 23.9248 13.4454 24.596L13.9998 24.9854L14.5543 24.5961C15.5099 23.9249 18.868 21.4907 21.9549 18.347C25.9661 14.2618 28 10.5736 28 7.3849C28 3.31281 24.4562 0 20.1004 0ZM20.5948 17.1798C18.0558 19.7656 15.3242 21.8559 13.9998 22.8193C12.6755 21.8559 9.944 19.7656 7.40498 17.1797C3.76837 13.476 1.84615 10.0889 1.84615 7.3849C1.84615 4.26452 4.56172 1.72587 7.89957 1.72587C10.0961 1.72587 12.1243 2.84504 13.1927 4.64668L14 6.00817L14.8073 4.64668C15.8756 2.8451 17.9038 1.72587 20.1004 1.72587C23.4383 1.72587 26.1538 4.26446 26.1538 7.3849C26.1538 10.0891 24.2316 13.4761 20.5948 17.1798Z" fill="#E8AA31"/>
    </svg>

                                </span>
                            </div>
                        </div>
                        <button type="button" class="btnProduct">В корзину 
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M4.14005 4.42146H16.6916C17.3507 4.42146 17.8296 5.04797 17.6565 5.68396L16.9778 8.17874C16.6225 9.48483 15.4366 10.3912 14.0831 10.3912H5.24054M0 1H2.00252C2.97824 1 3.81154 1.70406 3.97445 2.66608L5.47496 11.5273C5.63787 12.4893 6.47118 13.1934 7.44689 13.1934H16.3759" stroke="white" stroke-width="1.5"/>
    <path d="M8.84137 16.6992C8.84137 17.1897 8.42828 17.6193 7.87882 17.6193C7.32936 17.6193 6.91626 17.1897 6.91626 16.6992C6.91626 16.2086 7.32936 15.7791 7.87882 15.7791C8.42828 15.7791 8.84137 16.2086 8.84137 16.6992Z" stroke="white" stroke-width="1.5"/>
    <path d="M16.3768 16.6992C16.3768 17.1897 15.9637 17.6193 15.4142 17.6193C14.8648 17.6193 14.4517 17.1897 14.4517 16.6992C14.4517 16.2086 14.8648 15.7791 15.4142 15.7791C15.9637 15.7791 16.3768 16.2086 16.3768 16.6992Z" stroke="white" stroke-width="1.5"/>
    </svg>

                        </button>
                    </div>
                ';
            }
        ?>
        </div>
    </div>
</div>

<script src="../js/modal.js"></script>