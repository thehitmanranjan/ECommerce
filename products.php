<?php
include('common.php');
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
</head>

<body>
    <?php
    include('header.php');
    include('check-if-added.php');
    ?>
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 style="display:inline;" class="welcomemessage">Welcome to Whole Foods Market</h1>
            <img src="image/logo.svg" alt="Logo" class="ml-5 pl-5">
            <p>We have the best cuisines availabe for you!!</p>
        </div>
    </div>
    <div class="container" style="padding:0;">
        <div class="row">
            <div class="col-12 col-md-3 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#cholabhaturaModal">
                        <img src="image/cholabhatura.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Chola Bhatura</h3>
                        <p>Price &#8377;150/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(1);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=1">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal" id="cholabhaturaModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Chola Bhatura</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#dosaModal">
                        <img src="image/masaladosa.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Masala Dosa</h3>
                        <p>Price &#8377;200/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(2);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=2">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="dosaModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Dosa</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#pavbhajiModal">
                        <img src="image/pavbhaji.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Pav Bhaji</h3>
                        <p>Price &#8377;80.00</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(3);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=3">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="pavbhajiModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Pav Bhaji</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#idliModal">
                        <img src="image/idli.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Idli</h3>
                        <p>Price &#8377;60/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(4);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=4">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="idliModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Idli</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-3 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#pizzaModal">
                        <img src="image/pizza.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Pizza</h3>
                        <p>Price &#8377;250/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(5);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=5">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="pizzaModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Pizza</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#pastaModal">
                        <img src="image/pasta.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Pasta</h3>
                        <p>Price &#8377;150/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(6);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=6">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="pastaModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Pasta</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#lasagnaModal">
                        <img src="image/lasagna.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Lasagna</h3>
                        <p>Price &#8377;200/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(7);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=7">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="lasagnaModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Lasagna</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#pannacottaModal">
                        <img src="image/pistachio-panna-cotta.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Panna Cotta</h3>
                        <p>Price &#8377;150/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(8);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=8">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="pannacottaModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Panna Cotta</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-3 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#momosModal">
                        <img src="image/momos.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Momos</h3>
                        <p>Price &#8377;80/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(9);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=9">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="momosModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Momos</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#noodlesModal">
                        <img src="image/noodles.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Noodles</h3>
                        <p>Price &#8377;100/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(10);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=10">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="noodlesModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Noodles</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#springrollsModal">
                        <img src="image/springrolls.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Spring Rolls </h3>
                        <p>Price &#8377;200/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(11);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=11">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="springrollsModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Spring Rolls</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-2">
                <div class="img-thumbnail">
                    <a data-toggle="modal" data-target="#honeychillipotatoModal">
                        <img src="image/honey-chilli-potato.jpg" alt="" style="width:100%">
                    </a>
                    <div class="caption food__caption">
                        <h3>Chilli Potato</h3>
                        <p>Price &#8377;100/Person</p>
                        <?php
                        if (!isset($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-block" href="login.php">Add food kit to cart</a>
                            <?php
                        } else {
                            $ret = check(12);
                            if ($ret == 1) {
                            ?>
                                <button class="btn btn-primary btn-block" disabled>Added food kit to cart</button>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=12">Add food kit to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="modal" id="honeychillipotatoModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Honey Chilli Potato</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h2>food kit (Present in the kit: )</h2>
                                <ul>
                                    <li>2 cup chickpeas (channas)</li>
                                    <li>1 cup onions, chopped</li>
                                    <li>1 cup tomatoes, chopped</li>
                                    <li>2 cups maida (refined flour)</li>
                                    <li>1/2 cup whole wheat flour</li>
                                </ul>
                                <h2>Recipes</h2>
                                <ul>
                                    <li>In a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom.</li>
                                    <li>After it gets brown add chopped onions and saute it. Now add chopped ginger and garlic.</li>
                                    <li>Followed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the food kit together well.</li>
                                </ul>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding:0;">
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <footer>
                    <p class="footer__text">Copyright &copy; Whole Foods Market. All Rights
                        Reserved | Contact Us: +91 96933 71403</p>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>