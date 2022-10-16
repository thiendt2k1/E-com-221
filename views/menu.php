<div class="menu">
    <div class="menu__header">
        <img class="menu-image" src="/images/movies.png" alt="menu-image" />
        <h3>Our Movies</h3>
    </div>

    <div class="menu__search">
        <form accept-charset="utf-8" class="search-form" method="post" action="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-10">
                        <div class="form-floating mb-3">
                            <input type="text" name="keyword" class="form-control" id="floatingInput"
                                placeholder="Look for your favourite shows" aria-describedby="button-addon1">
                            <label for="floatingInput">Look for your favourite shows</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <button class="btn btn-outline-secondary search-button" type="submit" style="color: white;"
                            id="button-addon1">Search</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <div class="menu__options">
        <a class="option" href="/menu">
            <div class="option-image-block">
                <img src="/images/grid.png" alt="All shows" class="option-image" />
            </div>
            <h6>
                All shows
            </h6>
        </a>
        <a class="option" href="/menu?category_id=1">
            <div class="option-image-block">
                <img src="/images/movie-theater-icon.svg" alt="Movies" class="option-image" />
            </div>
            <h6>
                Movies
            </h6>
        </a>
        <a class="option" href="/menu?category_id=5">
            <div class="option-image-block">
                <img src="/images/film-icon.png" alt="TV show" class="option-image" />
            </div>
            <h6>
                TV show
            </h6>
        </a>
        <a class="option" href="/menu?category_id=2">
            <div class="option-image-block">
                <img src="/images/liveaction-icon.svg" alt="Live action" class="option-image" />
            </div>
            <h6>
                Live action
            </h6>
        </a>
        <a class="option" href="/menu?category_id=18">
            <div class="option-image-block">
                <img src="/images/animated-icon.jpg" alt=" Animated" class="option-image" />
            </div>
            <h6>
                Animated
            </h6>
        </a>
        <a class="option" href="/menu?category_id=20">
            <div class="option-image-block">
                <img src="/images/movies.png" alt="Other" class="option-image" />
            </div>
            <h6>
                Other
            </h6>
        </a>
    </div>

    <div class="menu__listing">
        <div class="container">
           <?php if (count($params['products']) == 0)
                echo '
                <div class="not-found">
                    <h3>Film not found !</h3>
                </div>
                '
            ?>
            <div class="row g-5">
                <?php
                foreach ($params['products'] as $param) {
                    echo '
                        <div class="col-xl-3 col-md-6 col-sm-12 col-xs-6">
                            <a href="/product?id=' . $param->id . '">
                                <div class="item-card">
                                    <img src="' . $param->image_url . '" alt=""
                                        class="item-image" />
                                    <div class="item-info">
                                        <p class="item-name">' . $param->name .' ('.$param->year.')</p>
                                        <div class="item-footer">
                                            <!-- <p>' . number_format($param->price, 0, ',', '.') . 'đ</p>-->
                                            <p></p>
                                            <div class="item-button">
                                                <img class="item-button-image"
                                                    src="\images\Download.svg"
                                                    alt="" />
                                            </div>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>';
                }
                ?> 
            </div>
        </div>
    </div>
</div>