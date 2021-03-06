<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="chosen.min.css">
    <script src="chosen.jquery.min.js"></script>
    <script src="./ckeditor/ckeditor.js"></script>
    <script src="./ckfinder/ckfinder.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <header class="wrapper">
        <div class="logo">
            <div class="logo-img">
                <img srcset="Group.png 2x" alt="">
            </div>
            <div class="logo-tittle">
                <img srcset="TTTCMS.png 2x" alt="">
            </div>
        </div>

        <div class="profile">
            <a href="" class="pro-plan">Pro plan</a>
            <div class="profile-img">
                <img srcset="image.png 2x" alt="">
            </div>
        </div>

        <div class="menu-dropdown">
            <div class="dropdown">
                <i class="fa-solid fa-bars"></i>
                <div class="dropdown-content menu">
                    <h1>Manage</h1>
                    <ul>
                        <li>
                            <img srcset="home.png 2x" alt="">
                            <a href="#" class="active">View site</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="file-plus.png 2x" alt="">
                            <a href="#">Create page</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="pen-tool.png 2x" alt="">
                            <a href="#">Blog articles</a>
                            <img class="chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x" alt="">
                        </li>
                        <li>
                            <img srcset="files.png 2x" alt="">
                            <a href="#">Files</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="users.png 2x" alt="">
                            <a href="#">Users</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="zap.png 2x" alt="">
                            <a href="#">Subscriptions</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="trash-2.png 2x" alt="">
                            <a href="#">Archived pages</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                    </ul>

                    <h1>Pro features</h1>
                    <ul>
                        <li>
                            <img srcset="book-open.png 2x" alt="">
                            <a href="#">Themes</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="box.png 2x" alt="">
                            <a href="#">Plugins</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="coffee.png 2x" alt="">
                            <a href="#">Upgrade plans</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- body-left -->

    <div class="body wrapper">
        <div class="body-left">
            <div class="menu">
                <div class="manage">
                    <h1>Manage</h1>
                    <ul>
                        <li>
                            <img srcset="home.png 2x" alt="">
                            <a href="#" class="active">View site</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="file-plus.png 2x" alt="">
                            <a href="#">Create page</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="pen-tool.png 2x" alt="">
                            <a href="#">Blog articles</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="files.png 2x" alt="">
                            <a href="#">Files</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="users.png 2x" alt="">
                            <a href="#">Users</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="zap.png 2x" alt="">
                            <a href="#">Subscriptions</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="trash-2.png 2x" alt="">
                            <a href="#">Archived pages</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                    </ul>
                </div>
                <div class="features">
                    <h1>Pro features</h1>
                    <ul>
                        <li>
                            <img srcset="book-open.png 2x" alt="">
                            <a href="#">Themes</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="box.png 2x" alt="">
                            <a href="#">Plugins</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                        <li>
                            <img srcset="coffee.png 2x" alt="">
                            <a href="#">Upgrade plans</a>
                            <img class="not-chose img-active" style="padding: 0 0 0 20px;" srcset="/Ellipse.png 2x"
                                alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- body right -->
        <div class="body-right">
            <div class="tab_panel container">
                <div class="title">Panel form fields</div>
                <div class="tabs-top">
                    <div class="tab">
                        <div class="open" style="display: flex;">
                            <img srcset="open.png 2x" alt="">
                            Open
                        </div>
                        <div class="unlisted" style="display: flex;">
                            <img srcset="circle_half.png 2x" alt="">
                            Unlisted
                        </div>
                        <div class="settings" style="display: flex;">
                            <img srcset="cog.png 2x" alt="">
                            Settings
                        </div>
                    </div>

                    <div class="arrows">
                        <i class="fa-solid fa-angle-left"></i>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>

                <div class="row options">
                    <!-- Tab links -->
                    <div class="tab">
                        <button class="tablinks chose" onclick="openCity(event, 'London')" style="display: flex;"><img
                                srcset="Vector.png 2x" alt="">
                            CONTENT</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')" style="display: flex;"><img
                                srcset="cog.png 2x" alt="">
                            SETTINGS</button>
                    </div>

                    <!-- Tab content -->
                    <div id="London" class="row tabcontent d-flex" style="margin: 0 auto;">
                        <!-- noi dung content -->
                        <div class="col-12 col-md-6 left">
                            <div class="check-box">
                                <span>Checkboxes</span>
                                <div class="item-check_box">
                                    <div class="item-check">
                                        <input type="checkbox" id="item1" value="OptionA">
                                        <label for="item1">Option A</label><br>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" id="item2" value="OptionB">
                                        <label for="item2">Option B</label><br>
                                    </div>

                                    <div class="item-check">
                                        <input type="checkbox" id="item3" value="OptionC">
                                        <label for="item3">Option C</label><br>
                                    </div>
                                </div>
                            </div>

                            <div class="date mb-3">
                                <label class="item-title mb-2" for="date">Date</label>
                                <input type="date" value="Duyanh" id="date" placeholder="Publish on: &nbsp"
                                    onchange="this.className=(this.value!=''?'has-value':'')">
                            </div>

                            <div class="email mb-4">
                                <label class="item-title mb-2" for="email">Email</label>
                                <input type="email" id="email" placeholder="Text input">
                                <i class="fa-solid fa-envelope envelope1"></i>
                            </div>

                            <div class="files">
                                <div class="item-title d-flex w-100"
                                    style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                    <div>Files</div>

                                    <form>
                                        <div class="upload-img d-flex" style="align-items: center;">
                                            <div id="yourBtn" onclick="getFile()"><i
                                                    style="font-size: 15px; margin-right:10px"
                                                    class="fa-solid fa-circle-plus"></i></div>
                                            <button class="upload">Upload</button>
                                        </div>


                                        <!-- this is your file input tag, so i hide it!-->
                                        <!-- i used the onchange event to fire the form submission-->
                                        <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile"
                                                type="file" value="upload" onchange="sub(this)" /></div>
                                        <!-- here you can have file submit button or you can write a simple script to upload the file automatically-->
                                        <!-- <input type="submit" value='submit' > -->
                                    </form>

                                </div>
                                <div class=" row files-img">
                                    <div class="col-4 p-0" style="padding-right: 5px!important;">
                                        <div class="card" style="">
                                            <img srcset="Rectangle11.png 2x" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="m-0">Bird-reynolds.jpg</p>
                                                <i style="cursor: pointer;" class="fa-solid fa-circle-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 p-0" style="padding-right: 5px!important;">
                                        <div class="card" style="">
                                            <img srcset="Rectangle12.png 2x" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="m-0">surface.jpg</p>
                                                <i style="cursor: pointer;" class="fa-solid fa-circle-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 p-0" style="padding-right: 5px!important;">
                                        <div classs="card" style="">
                                            <img srcset="Rectangle13.png 2x" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="m-0">breakfast.jpg</p>
                                                <i style="cursor: pointer;" class="fa-solid fa-circle-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="title-headline d-flex mb-5" style="">
                                <div class="" style="margin-right: 10px; font-weight: 400;
                                font-size: 24px;
                                line-height: 28px;
                                
                                /* Blue/600 */
                                
                                color: #4271AE;">01</div>
                                <div style="font-weight: 400;
                                font-size: 24px;
                                line-height: 28px;
                                
                                /* gray/900 */
                                
                                color: #111111;  -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                display: -webkit-box;">
                                    I???m a headline, use me to provide some structure
                                </div>
                            </div>
                            <div class="info-headline"
                                style="height: 130px; border-bottom: 1px solid #CCCCCC; margin-bottom: 80px;">
                                <div style="font-weight: 500;
                                font-size: 18px;
                                line-height: 21px;
                                /* identical to box height */
                                
                                
                                /* gray/900 */
                                
                                color: #111111; margin-bottom: 10px; ">Info</div>
                                <div class="headline">
                                    <p>Info fields are great to provide some context for editors</p>
                                </div>
                            </div>
                            <div class="multiple" style="position: relative;">
                                <div class="item-title mb-3">Multiselect</div>
                                <select multiple class="multiple-select">
                                    <option>Design</option>
                                    <option>Photography</option>
                                    <option>Developer</option>
                                    <option>Freelancer</option>
                                </select>
                                <i style="    position: absolute;
                                top: 57px;
                                right: 8px;
                                font-size: 10px;" class="fa-solid fa-angle-down"></i>
                                <p class="mt-3 mb-5" style="font-weight: 400;
                                font-size: 14px;
                                line-height: 16px;
                                
                                /* gray/600 */
                                
                                color: #777777;">Select multiple categories</p>
                            </div>

                            <div class="number">
                                <div class="item-title d-flex" style="justify-content: start; text-align: center;">
                                    <p>Number</p>
                                    <p style="display: flex;
                                    align-items: center;
                                    margin-top: 5px;
                                    margin-left: 10px;
                                    color: #999999;">*</p>
                                </div>
                                <div class="number-input" style="position: relative;">
                                    <input type="text" placeholder="Text input">
                                    <p style="font-weight: 400;
                                    font-size: 16px;
                                    line-height: 24px;
                                    /* identical to box height, or 150% */
                                    
                                    
                                    /* gray/600 */
                                    
                                    color: #777777; position: absolute;
                                    top: 10px;
                                    left: 8px;">Show</p>
                                    <p style="font-weight: 400;
                                    font-size: 16px;
                                    line-height: 24px;
                                    /* identical to box height, or 150% */
                                    
                                    
                                    /* gray/600 */
                                    
                                    color: #777777;     position: absolute;
                                    top: 10px;
                                    right: 3px;">projects per page</p>
                                </div>
                            </div>

                            <div class="page mt-5 mb-5">
                                <div class="item-title d-flex mb-4"
                                    style="justify-content: space-between; align-items: center;">
                                    <div>Pages</div>
                                    <i style="cursor: pointer;" class="fa-solid fa-circle-plus page-plus"></i>
                                </div>

                                <div class="page-file d-flex mb-1" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                    <div class="page-file_left">
                                        <i class="fa-solid fa-envelope" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                        <p>Bird-reynolds.jpg</p>
                                    </div>
                                    <div class="page-file_right">
                                        <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                        <i class="fa-solid fa-ellipsis" style="padding: 0 12px;"></i>
                                    </div>
                                </div>
                                <div class="page-file d-flex" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                    <div class="page-file_left">
                                        <i class="fa-solid fa-envelope" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                        <p>Bird-reynolds.jpg</p>
                                    </div>
                                    <div class="page-file_right">
                                        <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                        <i class="fa-solid fa-ellipsis" style="padding: 0 12px;"></i>
                                    </div>
                                </div>

                                <div class="page-file d-flex mb-1 insert-page" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                    <div class="page-file_left">
                                        <i class="fa-solid fa-envelope" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                        <input class="add-text_input" type="text" placeholder="Text input">
                                    </div>
                                    <div class="page-file_right">
                                        <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                        <i class="fa-solid fa-xmark hide-page" style="cursor: pointer; padding: 0 13.5px;"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-md-6 right">
                            <div class="radios">
                                <div class="item-title">
                                    Radios
                                </div>
                                <div class="radios-option">
                                    <div class="radios-item">
                                        <input type="radio" id="optionA" name="" value="">
                                        <label for="optionA">Option A</label><br>
                                    </div>
                                    <div class="radios-item">
                                        <input type="radio" id="optionB" name="" value="">
                                        <label for="optionB">Option B</label><br>
                                    </div>
                                    <div class="radios-item">
                                        <input type="radio" id="optionC" name="" value="">
                                        <label for="optionC">Option C</label><br>
                                    </div>
                                </div>
                            </div>

                            <div class="range mb-3">
                                <div class="item-title mb-2">Range</div>
                                <div class="range-budget">
                                    <label for="customRange1" class="form-label m-0 pr-1"
                                        style="padding-left:7px; padding-right: 7px;">Budget</label>
                                    <input id="myinput" type="range" value="25" min="0" max="200"
                                        oninput="this.nextElementSibling.value = this.value">
                                    <output style="width: 20px; */
                                                        height: 18px;
                                                        width: 55px;
                                                        background: black;
                                                         color: white;
                                                        text-align: center;
                                                        margin: 0 10px;">24
                                    </output>
                                </div>
                            </div>

                            <div class="select-input mb-4" style="width:100%">
                                <div class="item-title mb-2">Select</div>
                                <select class="form-select" style="
                                width: 100%;
                                height: 40px;
                                border: 1px solid #CCCCCC;" aria-label="Default select example">
                                    <option selected>Text input</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="structure w-100">
                                <div class="item-title d-flex w-100"
                                    style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                    <div>Structure</div>
                                    <i style="font-size: 15px; cursor: pointer;" class="fa-solid fa-circle-plus table-plus"></i>
                                </div>

                                <div class="table-scroll">

                                    <table class="table table-borderless w-100">
                                        <thead>
                                            <tr>
                                                <th style="font-weight: 400!important;" scope="col">#</th>
                                                <th style="font-weight: 400!important;" scope="col">Title</th>
                                                <th style="font-weight: 400!important;" scope="col">Icon</th>
                                                <th style="font-weight: 400!important;" scope="col">Text</th>
                                                <th style="font-weight: 400!important;" scope="col">Link</th>
                                                <th style="font-weight: 400!important;" scope="col">Link Text</th>
                                                <th style="font-weight: 400!important;" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style="border-bottom: none;
                                                        font-weight: 400!important;
                                                        font-size: 14px;
                                                        color: #999999;" scope="row"><input type="text" placeholder="1"
                                                        style="border: none; outline:none;"></th>
                                                <td> <input type="text" placeholder="Contact"
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="contact.svg"
                                                        style="border: none; outline:none;"></td>
                                                <td style=""><input type="text" placeholder="Contact us f..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="http://exam..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="Super Comp..."
                                                        style="border: none; outline:none;"></td>
                                                <td><i class="fa-solid fa-circle-minus close-row"></i></td>
                                            </tr>
                                            <tr>
                                                <th style="border-bottom: none;
                                                        font-weight: 400!important;
                                                        font-size: 14px;
                                                        color: #999999;" scope="row"><input type="text" placeholder="2"
                                                        style="border: none; outline:none;"></th>
                                                <td><input type="text" placeholder="Forum"
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="forum.svg"
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="Got stuck?..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="http://foru..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="Kirby Forum..."
                                                        style="border: none; outline:none;"></td>
                                                <td><i class="fa-solid fa-circle-minus close-row"></i></td>
                                            </tr>
                                            <tr class="insert-table">
                                                <th style="border-bottom: none;
                                                        font-weight: 400!important;
                                                        font-size: 14px;
                                                        color: #999999;" scope="row"><input type="text"
                                                        placeholder="..." style="border: none; outline:none;"></th>
                                                <td><input type="text" placeholder="..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="..."
                                                        style="border: none; outline:none;"></td>
                                                <td><input type="text" placeholder="..."
                                                        style="border: none; outline:none;"></td>
                                                <td><i style="cursor: pointer;" class="fa-solid fa-xmark hide-row"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="tags w-100 mt-4">
                                <div class="item-title mb-2">
                                    Tags
                                </div>

                                <div class="tags-item d-flex">
                                    <div class="item-tag">
                                        <div class="item">
                                            <div>Kirby</div>
                                            <div class="exit">
                                                <i style="cursor: pointer;" class="fa-solid fa-xmark"></i>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div>CMS</div>
                                            <div class="exit">
                                                <i style="cursor: pointer;" class="fa-solid fa-xmark"></i>
                                            </div>
                                        </div>
                                        <div class="item mb-0">
                                            <div>Fields</div>
                                            <div class="exit">
                                                <i style="cursor: pointer;" class="fa-solid fa-xmark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tag">
                                        <img class="p-0" srcset="tag.png 2x" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="tel mt-3">
                                <div class="item-title mb-2">
                                    Tel
                                </div>

                                <div class="email">
                                    <input type="text" placeholder="Text input">
                                    <i class="fa-solid fa-phone envelope1"></i>
                                </div>

                                <div class="help mt-2 mb-4">Help text</div>
                            </div>

                            <div class="text-field">
                                <div class="item-title d-flex" style="justify-content: start; text-align: center;">
                                    <p>Text field</p>
                                    <p style="display: flex;
                                    align-items: center;
                                    margin-top: 5px;
                                    margin-left: 10px;
                                    color: #999999;">*</p>
                                </div>

                                <div class="text-field_input email">
                                    <input type="text" placeholder="Text input">
                                </div>

                                <div class="help mt-2 mb-5">Help text</div>
                            </div>

                            <div class="ckediter">
                                <div class="item-title mb-2">Textarea</div>
                                <textarea name="content"></textarea>
                            </div>


                            <div class="row mt-4">
                                <div class="col-12 col-md-6">
                                    <div class="item-title mb-3">Toogle</div>
                                    <div class="toggle-item">
                                        <label class="switch" style="margin-right: 10px;">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                        <div>Tooggle text</div>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="item-title mb-3">URL</div>
                                    <div class="url-item email">
                                        <input type="text" placeholder="https://getkirby.com">
                                        <i class="fa-solid fa-link envelope1"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="page mt-5 mb-5">
                                <div class="item-title d-flex mb-4"
                                    style="justify-content: space-between; align-items: center;">
                                    <div>User</div>
                                    <i class="fa-solid fa-circle-plus user-plus"></i>
                                </div>

                                <div class="page-file d-flex mb-1" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                    <div class="page-file_left">
                                        <i class="fa-solid fa-user" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                        <p>Bird-reynolds.jpg</p>
                                    </div>
                                    <div class="page-file_right">
                                        <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                        <i class="fa-solid fa-ellipsis" style="padding: 0 12px;"></i>
                                    </div>
                                </div>
                                <!-- add file -->
                                <div class="page-file d-flex mb-1 insert-user" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                    <div class="page-file_left">
                                        <i class="fa-solid fa-user" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                        <input class="add-text_input" type="text" placeholder="Text input">
                                    </div>
                                    <div class="page-file_right">
                                        <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                        <i class="fa-solid fa-xmark hide-user" style="padding: 0 13.5px;"></i>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div id="Paris" class="tabcontent">
                        <!-- noi dung setting -->
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

<script src="app.js"></script>


</html>