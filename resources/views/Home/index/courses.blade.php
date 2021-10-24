@extends('Home.layouts.master')
@section('head')

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <style>
        .contentCardParent[_ngcontent-c18] {
            position: relative;
        }

        .contentCardParent[_ngcontent-c18] .featuredContentImage[_ngcontent-c18]:after, .contentCardParent[_ngcontent-c18] .contentImage[_ngcontent-c18]:after {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            background-color: rgba(0, 0, 0, 0);
            z-index: 3;
        }

        .contentCardParent[_ngcontent-c18]:hover .featuredContentImage[_ngcontent-c18]:after, .contentCardParent[_ngcontent-c18]:hover .contentImage[_ngcontent-c18]:after {
            background-color: rgba(0, 0, 0, 0.15);
        }

        .contentCardInnerContainer[_ngcontent-c18] {
            border-radius: 3px;
            background-color: #ffffff;
            overflow: hidden;
            -webkit-box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
            box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
            position: relative;
        }

        .contentCardInnerContainer.inactive[_ngcontent-c18] {
            -webkit-filter: blur(2px) grayscale(60%);
            filter: blur(2px) grayscale(60%);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .contentCardInnerContainer.inactive[_ngcontent-c18]:hover {
            -webkit-filter: blur(0) grayscale(0%);
            filter: blur(0) grayscale(0%);
        }

        a.contentMainLink[_ngcontent-c18] {
            position: relative;
        }

        .discountBadge[_ngcontent-c18] {
            width: 54px;
            height: 55px;
            background: url("./assets/images/discont_badge.png");
            z-index: 5;
            color: #ffffff;
            font-size: 11px;
            font-weight: 100;
            line-height: 16px;
            position: absolute;
            left: -10px;
            top: -10px;
            -webkit-transform: rotate(-30deg);
            transform: rotate(-30deg);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .discountBadge[_ngcontent-c18] .discountPercentage[_ngcontent-c18] {
            font-weight: normal;
            font-size: 15px;
        }

        .contentCardParent[_ngcontent-c18]:hover .discountBadge[_ngcontent-c18] {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        .organizationBadge[_ngcontent-c18] {
            z-index: 5;
            position: absolute;
            right: 10px;
            top: 10px;
            padding: 5px 10px;
            color: #383d48;
            font-size: 11px;
            font-weight: 500;
            line-height: 19px;
            text-align: center;
            border-radius: 3px;
            background-color: rgba(255, 255, 255, 0.8);
            -webkit-box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.3);
        }

        a[_ngcontent-c18] {
            text-decoration: none;
            color: inherit;
        }

        h3[_ngcontent-c18] {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            color: #383d48;
            font-size: 18px;
            line-height: 31px;
            font-weight: 300;
            letter-spacing: -1px;
        }

        .cardTitle[_ngcontent-c18] {
            min-height: 139px;
            max-height: calc(100% - 48px);
            padding-bottom: 20px;
            margin: 10px 15px 0 15px;
            text-align: right;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .cardTitle[_ngcontent-c18] .courseAuthor[_ngcontent-c18] {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding: 2px 1px 2px 5px;
            border-radius: 3px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .cardTitle[_ngcontent-c18] .courseAuthor[_ngcontent-c18]:hover .authorName[_ngcontent-c18] {
            color: #0093ee;
        }

        .cardTitle[_ngcontent-c18] .courseAuthor[_ngcontent-c18] .authorImg[_ngcontent-c18] {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 50%;
            margin-left: 5px;
            width: 20px;
            height: 20px;
        }

        .cardTitle[_ngcontent-c18] .courseAuthor[_ngcontent-c18] .authorName[_ngcontent-c18] {
            color: #383d48;
            font-size: 12px;
            font-weight: 600;
            line-height: 20px;
            letter-spacing: -0.5px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .blogCard[_ngcontent-c18] .cardTitle[_ngcontent-c18] {
            min-height: 90px;
        }

        h3.cardTitle[_ngcontent-c18] > span[_ngcontent-c18] {
            padding-bottom: 10px;
            width: 100%;
            text-align: right;
            max-height: 75px;
            overflow: hidden;
            position: relative;
        }

        h3.cardTitle[_ngcontent-c18] > span[_ngcontent-c18] span[_ngcontent-c18] {
            display: none;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            height: 19px;


            background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), color-stop(48%, rgba(255, 255, 255, 0.6)), color-stop(80%, white));
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.6) 48%, white 80%);

            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#ffffff', GradientType=0);
        }

        .featured[_ngcontent-c18] .cardTitle[_ngcontent-c18] {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            position: relative;
            margin: 0;
        }

        .featured[_ngcontent-c18] h3[_ngcontent-c18] {
            padding: 0;
            margin: 0;
        }

        .featured[_ngcontent-c18] .applyBtn[_ngcontent-c18] {
            font-size: 18px;
            font-weight: 500;
            line-height: 22px;
            padding: 2px 15px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .featured[_ngcontent-c18] .applyBtn[_ngcontent-c18] .contentPrice[_ngcontent-c18] {
            padding: 0;
        }

        .featured[_ngcontent-c18] .actionBtn[_ngcontent-c18] {
            font-size: 14px;
            font-weight: 500;
            line-height: 22px;
            padding: 2px 15px;
        }

        .featured[_ngcontent-c18] .detailRow[_ngcontent-c18] {
            padding: 0;
            margin-bottom: 0;
        }

        .featured[_ngcontent-c18] .detailsCol[_ngcontent-c18] {
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }

        .cardDescription[_ngcontent-c18] {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            position: relative;
            font-size: 14px;
            font-weight: 100;
            color: #6f7881;
            overflow: hidden;
        }

        .cardDescription[_ngcontent-c18]:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1em;
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(white));
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), white 100%);
            text-align: justify;
        }

        .detailsCol[_ngcontent-c18] {
            padding: 15px 15px 10px 15px;
        }

        .contentQuiz[_ngcontent-c18], .contentRate[_ngcontent-c18], .contentTime[_ngcontent-c18] {
            color: #6f7881;
            font-weight: lighter;
            margin-left: 15px;
        }

        .contentQuiz[_ngcontent-c18] span[_ngcontent-c18], .contentRate[_ngcontent-c18] span[_ngcontent-c18], .contentTime[_ngcontent-c18] span[_ngcontent-c18] {
            font-size: 12px;
            font-weight: 500;
            line-height: 20px;
            color: #383d48;
        }

        .contentQuiz[_ngcontent-c18]:last-child, .contentRate[_ngcontent-c18]:last-child, .contentTime[_ngcontent-c18]:last-child {
            margin-left: 0;
        }

        .contentQuiz[_ngcontent-c18] .icon-faranesh-font-32[_ngcontent-c18], .contentTime[_ngcontent-c18] i[_ngcontent-c18], .contentRate[_ngcontent-c18] .icon-faranesh-font-33-1[_ngcontent-c18] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            color: #bababa;
            margin-left: 4px;
            padding-bottom: 1px;
            font-size: 16px;
        }

        .contentTime[_ngcontent-c18] i[_ngcontent-c18] {
            margin-left: 0;
            margin-right: 5px;
        }

        .blogCard[_ngcontent-c18] .contentTime[_ngcontent-c18] i[_ngcontent-c18] {
            margin-left: 5px;
            margin-right: 0;
        }

        .contentPrice[_ngcontent-c18] {
            position: relative;
        }

        .contentPrice[_ngcontent-c18] .discountPrice[_ngcontent-c18] {
            font-size: 16px;
            font-weight: normal;
            line-height: 25px;
            color: #FF0046;
            position: absolute;
            bottom: 101%;
            background-color: #ffffff;
            width: 135%;
            text-align: center;
        }

        .contentPrice[_ngcontent-c18] .discountPrice[_ngcontent-c18]:before {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%) rotate(-10deg);
            transform: translate(-50%, -50%) rotate(-10deg);
            width: 50%;
            height: 1px;
            background-color: #FF0046;
        }

        .contentPrice[_ngcontent-c18] .endPrice[_ngcontent-c18] {
            font-size: 18px;
            font-weight: 500;
            line-height: 22px;
            background-color: #4ECE3D;
            border-radius: 3px;
            border: 1px solid #40b630;
            color: #ffffff;
            padding: 2px 14px;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .contentPrice[_ngcontent-c18] .endPrice[_ngcontent-c18]:hover {
            background-color: #40b630;
        }

        .contentPrice[_ngcontent-c18] .endPrice.enrolled[_ngcontent-c18] {
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            background-color: #0093ee;
            border: 1px solid #0076BD;
            padding: 3px 8px;
        }

        .contentPrice[_ngcontent-c18] .endPrice.enrolled[_ngcontent-c18]:hover {
            background-color: #0093ee;
        }

        .applyBtn[_ngcontent-c18] .separator[_ngcontent-c18] {
            height: 25px;
            border-right: 1px solid #69717D;
        }

        .contentImage[_ngcontent-c18] {
            z-index: 2;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }

        .contentImage[_ngcontent-c18]:before {
            content: '';
            padding-top: 56.25%;

            float: left;
        }

        .contentBackImg[_ngcontent-c18] {
            z-index: 1;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            background-image: url("./assets/images/loading-medium.gif");
            background-color: #cccccc;
            background-size: 45px;
            background-repeat: no-repeat;
            background-position: center;
        }

        .contentBackImg[_ngcontent-c18]:before {
            content: '';
            padding-top: 56.25%;

            float: left;
        }

        .featuredContentImage[_ngcontent-c18] {
            position: relative;
            background-size: 45px;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #cccccc;
            background-image: url("./assets/images/loading-medium.gif");
        }

        .featuredContentImage[_ngcontent-c18] div[_ngcontent-c18] {
            left: 0;
            top: 0;
            position: absolute;
            z-index: 2;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 480px) {
            .featuredContentImage[_ngcontent-c18]:before {
                content: '';
                padding-top: 56.25%;

                float: left;
            }
        }

        @media screen and (min-width: 981px) {
            .featuredContentImage[_ngcontent-c18]:before {
                content: '';
                padding-top: 56.25%;

                float: left;
            }
        }

        .featuredContentImage[_ngcontent-c18]:before {
            content: '';
            padding-top: 56.25%;

            float: left;
        }

        .detailRow[_ngcontent-c18] {
            padding: 0 15px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .cardMeta[_ngcontent-c18] {
            margin: 18px 16px 0 16px;
            padding-bottom: 18px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .cardMeta[_ngcontent-c18]:last-child {
            border-bottom: none;
        }

        .cardMeta[_ngcontent-c18] .cardMetaTitle[_ngcontent-c18] {
            color: #6f7881;
            font-weight: 100;
            font-size: 14px;
        }

        .cardMeta[_ngcontent-c18] .cardMetaTitle[_ngcontent-c18] i[_ngcontent-c18] {
            font-size: 22px;
            margin-left: 15px;
        }

        .cardMeta[_ngcontent-c18] .cardMetaValue[_ngcontent-c18] {
            font-size: 14px;
        }

        .contentQuizFooter[_ngcontent-c18] {
            width: 100%;
            padding: 10px 16px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] {
            width: 100%;
            overflow: hidden;
            position: relative;
            height: 45px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transition: top 0.2s linear;
            transition: top 0.2s linear;
            height: 90px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizCounter[_ngcontent-c18] {
            width: 100%;
            height: 45px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizCounter[_ngcontent-c18] .contentQuizCounterTitle[_ngcontent-c18] {
            color: #6f7881;
            font-weight: 100;
            font-size: 14px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizCounter[_ngcontent-c18] .contentQuizCounterTitle[_ngcontent-c18] i[_ngcontent-c18] {
            font-size: 22px;
            margin-left: 15px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizCounter[_ngcontent-c18] .contentQuizCounterValue[_ngcontent-c18] {
            font-size: 14px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] {
            width: 100%;
            height: 45px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button[_ngcontent-c18] {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 43px;
            border-radius: 3px;
            cursor: pointer;
            -webkit-transition: background-color 0.2s linear;
            transition: background-color 0.2s linear;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button[_ngcontent-c18]:first-child {
            margin-left: 2px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button[_ngcontent-c18]:last-child {
            margin-right: 2px;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button.addAction[_ngcontent-c18] {
            color: #4ECE3D;
            border: 1px solid #4ECE3D;
            background-color: rgba(78, 206, 61, 0.05);
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button.addAction[_ngcontent-c18]:hover {
            background-color: rgba(78, 206, 61, 0.15);
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button.editAction[_ngcontent-c18] {
            color: #0093ee;
            border: 1px solid #0093ee;
            background-color: rgba(0, 147, 236, 0.05);
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button.editAction[_ngcontent-c18]:hover {
            background-color: rgba(0, 147, 236, 0.15);
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button.disabled[_ngcontent-c18] {
            color: #9b9b9b;
            border: 1px solid #9b9b9b;
            background-color: rgba(155, 155, 155, 0.05);
            cursor: not-allowed;
        }

        .contentQuizFooter[_ngcontent-c18] .contentQuizFooterContainer[_ngcontent-c18] .contentQuizFooterPan[_ngcontent-c18] .contentQuizActions[_ngcontent-c18] .button.disabled[_ngcontent-c18]:hover {
            background-color: rgba(155, 155, 155, 0.15);
        }

        .contentCardParent[_ngcontent-c18]:hover .contentQuizFooterPan[_ngcontent-c18] {
            top: -45px !important;
        }

        @media screen and (max-width: 480px) {
            .featuredContentImage[_ngcontent-c18] {
                margin-bottom: 90%;
            }

            .featured[_ngcontent-c18] .detailsCol[_ngcontent-c18] {
                top: 38% !important;
                height: 62% !important;
            }
        }

        @media screen and (min-width: 481px) and (max-width: 767px) {
            .featuredContentImage[_ngcontent-c18] {
                margin-bottom: 60%;
            }

            .featured[_ngcontent-c18] .detailsCol[_ngcontent-c18] {
                top: 48% !important;
                height: 52% !important;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 980px) {
            .featuredContentImage[_ngcontent-c18] {
                margin-bottom: 56.25%;
            }

            .featured[_ngcontent-c18] .detailsCol[_ngcontent-c18] {
                top: 50% !important;
                height: 50% !important;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1220px) {
            h3[_ngcontent-c18], .featured[_ngcontent-c18] h3[_ngcontent-c18] {
                font-size: 16px;
                line-height: 24px;
            }
        }
    </style>
    <style>
        @media (min-width: 1200px) {
            .container, .container-lg, .container-md, .container-sm, .container-xl {
                max-width: 1440px !important;
            }
        }

        .carouselResultsWrapper[_ngcontent-c23] {
            width: calc(100% + 30px);
            margin-right: -15px;
            margin-left: -15px;
        }

        .loadingGifWrap[_ngcontent-c23] {
            padding: 5px 0 20px 0;
        }

        .container.second[_ngcontent-c23] {
            padding: 0;
        }

        .boxAndFilters[_ngcontent-c23] {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding-right: 45px;
        }

        .searchBar[_ngcontent-c23] {
            padding: 0 5px 0 20px;
            min-height: 84px;
            background-color: #ffffff;
            border-top-left-radius: 3px;
            border-top-right-radius: 45px 45px;
            border-bottom-right-radius: 45px 45px;
            border-bottom-left-radius: 3px;
            position: relative;
            margin-top: 30px;
            margin-bottom: 15px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
            box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
        }

        .searchBar[_ngcontent-c23] .bcContainer {
            padding-right: 0;
        }

        .searchBar[_ngcontent-c23] .catIcon[_ngcontent-c23] {
            border: 4px solid #ebeced;
            width: 76px;
            height: 76px;
            border-radius: 50%;
            overflow: hidden;
            font-size: 40px;
            color: #fff;
            margin: 0;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
            background-color: #6f7881;
        }

        .searchBar[_ngcontent-c23] .searchTools[_ngcontent-c23] {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .searchBoxWrap[_ngcontent-c23] {
            margin: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .filtersWrap[_ngcontent-c23] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .filterWrapp[_ngcontent-c23] {
            border-radius: 3px;
            margin-right: 45px;
            overflow: hidden;
            border: 1px solid #b1b6bb;
        }

        .filterWrapp[_ngcontent-c23] .divider[_ngcontent-c23] {
            height: 10px;
            width: 1px;
            background-color: #b1b6bb;
        }

        .filters[_ngcontent-c23] {
            cursor: pointer;
            padding: 4px 10px;
            color: #868d98;
            font-size: 12px;
            font-weight: 600;
            line-height: 22px;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
            background-color: #ffffff;
        }

        .filters.selected[_ngcontent-c23] {
            color: #ffffff;
            background-color: #0093ee;
        }

        .sortSelect[_ngcontent-c23] {
            border: 1px solid #b1b6bb;
            border-radius: 3px;
            margin-right: 15px;
            height: 32px;
        }

        .sortSelect[_ngcontent-c23] .divider[_ngcontent-c23] {
            height: 10px;
            width: 1px;
            background-color: #b1b6bb;
        }

        .selectHolder[_ngcontent-c23] {
            width: 100px;
            position: relative;
        }

        .sortSelect[_ngcontent-c23] select[_ngcontent-c23] {
            border: none !important;
            cursor: pointer;
            padding: 0 18px 0 8px;
            border-radius: 4px;
            background-color: #FFFFFF;
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            outline: none;
            height: 30px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: -0.5px;
            line-height: 22px;
            color: #6B717D;
        }

        .sortSelect[_ngcontent-c23] select[_ngcontent-c23] .opts[_ngcontent-c23] {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .sortSelect[_ngcontent-c23] .arrow[_ngcontent-c23] {
            font-size: 6px;
            position: absolute;
            right: 6px;
            color: #6B717D;
            top: 55%;
            pointer-events: none;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .sortDirection[_ngcontent-c23] {
            width: 35px;
            height: 30px;
            cursor: pointer;
            background-color: #ffffff;
            border: none;
            color: #868d98;
            border-radius: 3px;
        }

        .labelsCol[_ngcontent-c23] {
            margin-bottom: 20px;
            padding: 0 15px 0 15px;
        }

        .scopeWrapper[_ngcontent-c23] {
            padding: 15px 15px 0;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
            box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
            background-color: #ffffff;
            margin-bottom: 15px;
        }

        .singleScope[_ngcontent-c23] {
            padding-bottom: 10px;
            color: #6f7881;
        }

        .singleScope[_ngcontent-c23]:last-child {
            border: none;
        }

        .scopeTitle[_ngcontent-c23] {
            cursor: pointer;
            padding-bottom: 5px;
        }

        .angleHolder[_ngcontent-c23] {
            width: 25px;
            font-size: 18px;
        }

        .angleHolder[_ngcontent-c23] i[_ngcontent-c23] {
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .scopeName[_ngcontent-c23] {
            font-size: 17px;
            font-weight: 500;
            line-height: 28px;
        }

        .labelList[_ngcontent-c23] {
            padding-right: 15px;
            font-size: 15px;
            font-weight: normal;
            line-height: 25px;
            overflow: hidden;
            height: 0;
            -webkit-transition: all 0.6s;
            transition: all 0.6s;
            position: relative;
        }

        .labelList[_ngcontent-c23] p[_ngcontent-c23] {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #ffffff;
            width: 100%;
            padding: 10px;
            cursor: pointer;
            margin: 0;
            font-size: 11px;
            font-weight: 400;
            line-height: 17px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .topLine[_ngcontent-c23] {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            width: calc(100% + 30px);
            margin-bottom: 14px;
            margin-right: -30px;
        }

        .singleLabel[_ngcontent-c23] {
            margin-bottom: 10px;
            font-size: 13px;
            font-weight: normal;
            line-height: 22px;
        }

        .singleResults[_ngcontent-c23] {
            padding: 0 0 0 15px;
            margin-bottom: 15px;
        }

        .paginateWrapp[_ngcontent-c23] {
            margin-bottom: 0;
            margin-top: 20px;
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7;
        }

        .category[_ngcontent-c23] {
            position: relative;
            margin: 15px 0 0 0;
            padding-right: 10px;
            color: #6B717D;
            font-size: 18px;
            font-weight: 600;
            line-height: 31px;
            text-align: right;
        }

        .category[_ngcontent-c23] div[_ngcontent-c23] {
            margin-left: 5px;
        }

        .breadcrumbWrapper[_ngcontent-c23] {
            padding: 0;
            margin-bottom: 5px;
        }

        .noResult[_ngcontent-c23] {
            width: 100%;
            text-align: center;
            padding: 5px 0 20px 0;
        }

        .checkbox1[_ngcontent-c23] + label[_ngcontent-c23] {
            white-space: nowrap;
        }

        @media screen and (max-width: 480px) {
            .searchBar[_ngcontent-c23] {
                padding-left: 10px;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                border-radius: 3px;
                padding-top: 10px;
            }

            .labelsCol[_ngcontent-c23] {
                padding: 0 15px !important;
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
                margin-top: 20px;
            }

            .resultsCol[_ngcontent-c23] {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
                padding: 0 15px;
            }

            .singleResults[_ngcontent-c23] {
                padding: 0 !important;
            }

            .priceFilter[_ngcontent-c23], .sortSelect[_ngcontent-c23] {
                margin: 0 5px 15px !important;
            }

            .searchBoxWrap[_ngcontent-c23] {
                margin: 0 0 15px 0;
            }

            .boxAndFilters[_ngcontent-c23] {
                padding-right: 5px;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .filtersWrap[_ngcontent-c23] {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: 100%;
            }

            .category[_ngcontent-c23] {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-right: 0;
            }
        }

        @media screen and (min-width: 481px) and (max-width: 767px) {
            .searchBar[_ngcontent-c23] {
                padding-left: 10px;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                border-radius: 3px;
            }

            .labelsCol[_ngcontent-c23] {
                padding: 0 15px !important;
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
                margin-top: 20px;
            }

            .resultsCol[_ngcontent-c23] {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
                padding: 0 15px;
            }

            .singleResults[_ngcontent-c23] {
                padding: 0 !important;
            }

            .priceFilter[_ngcontent-c23], .sortSelect[_ngcontent-c23] {
                margin: 0 5px 15px !important;
            }

            .searchBoxWrap[_ngcontent-c23] {
                margin: 0 0 15px 0;
            }

            .boxAndFilters[_ngcontent-c23] {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-right: 5px;
            }

            .filtersWrap[_ngcontent-c23] {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: 100%;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 980px) {
            .searchBar[_ngcontent-c23] {
                padding-left: 10px;
            }

            .boxAndFilters[_ngcontent-c23] {
                padding-right: 5px;
            }

            .priceFilter[_ngcontent-c23] {
                margin-right: 0;
            }

            .sortSelect[_ngcontent-c23] {
                padding: 0 6px;
            }

            .searchTools[_ngcontent-c23] {
                width: 47%;
                min-width: 47%;
            }

            .boxAndFilters[_ngcontent-c23] {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .filtersWrap[_ngcontent-c23] {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: 100%;
                margin-top: 4px;
            }
        }

        @media screen and (min-width: 981px) and (max-width: 1220px) {
            .searchBar[_ngcontent-c23] {
                padding-left: 10px;
            }

            .boxAndFilters[_ngcontent-c23] {
                padding-right: 15px;
            }

            .priceFilter[_ngcontent-c23] {
                margin-right: 15px;
                margin-bottom: 5px;
            }

            .sortSelect[_ngcontent-c23] {
                padding: 0 6px;
            }

            .searchTools[_ngcontent-c23] {
                width: 58%;
                min-width: 58%;
            }

            .filtersWrap[_ngcontent-c23] {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        @media screen and (min-width: 1221px) and (max-width: 1440px) {
            .boxAndFilters[_ngcontent-c23] {
                padding-right: 37px;
            }

            .priceFilter[_ngcontent-c23] {
                margin-right: 37px;
            }

            .filtersWrap[_ngcontent-c23] {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }
    </style>
    <style>.pagination[_ngcontent-c25] {
            font-size: 16px;
            font-weight: normal;
            line-height: 25px;
            color: #6587B7;
            background-color: #ffffff;
            -webkit-box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
            box-shadow: 0 1px 2px 0 rgba(25, 25, 25, 0.2);
            max-width: 100%;
        }

        .pagination.noShadow[_ngcontent-c25] {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .goFirst[_ngcontent-c25], .goLast[_ngcontent-c25], .pageIndex[_ngcontent-c25] {
            border: 1px solid rgba(0, 0, 0, 0.1);
            cursor: pointer;
            height: 45px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .pageIndex[_ngcontent-c25] {
            min-width: 45px;
        }

        .pageIndex.selected[_ngcontent-c25] {
            background-color: #0093ee !important;
            border-color: #0093ee;
            color: #ffffff !important;
            cursor: default;
        }

        .goFirst[_ngcontent-c25], .goLast[_ngcontent-c25] {
            padding: 0 10px;
        }

        .goFirst[_ngcontent-c25]:hover, .goLast[_ngcontent-c25]:hover, .pageIndex[_ngcontent-c25]:hover {
            background-color: #eeeeee;
            color: #5171A2;
        }
    </style>
@endsection
@section('content')
    @if(auth()->user())

        <main _ngcontent-c0="">
            <alert _ngcontent-c0="" _nghost-c2="" class="ng-tns-c2-1">
                <div _ngcontent-c2="" class="ng-tns-c2-1" id="alertContainer">
                    <div _ngcontent-c2="" class="ng-tns-c2-1" id="alert-holder">
                        <!---->
                    </div>
                </div>


            </alert>
            <loading-bar _ngcontent-c0="" _nghost-c3="">
                <div _ngcontent-c3="" class="loadingBarFill done" style="width: 100%;"></div>
            </loading-bar>
            <router-outlet _ngcontent-c0=""></router-outlet>
            <search _nghost-c23="" class="">
                <div _ngcontent-c23="" class="searchPage">

                    <div _ngcontent-c23="" class="container first">
                        <div _ngcontent-c23="" class="searchBar flex-row jus-between al-center wrapped">
                            <!---->
                            <div _ngcontent-c23="" class="catIcon flex-row jus-center al-center"
                                 style="background-color: rgb(125, 102, 158);">
                                <i _ngcontent-c23="" class="fas fa-laptop-code"></i>
                            </div>
                            <!---->
                            <div _ngcontent-c23="" style="max-width: 100%">
                                <h1 _ngcontent-c23="" class="category flex-row jus-start al-center">
                                    <!---->
                                    <!----><span _ngcontent-c23="" class="catName">
								انیمیشن و سه‌بعدی
							</span>
                                </h1>

                            </div>
                            <div _ngcontent-c23="" class=" searchTools">
                                <div _ngcontent-c23="" class="boxAndFilters wi-100 flex-row jus-between al-center ">

                                    <div _ngcontent-c23=""
                                         class="searchBoxWrap wi-xl-55 wi-lg-70 wi-md-100 wi-sm-90 wi-xs-100">
                                        <search-box _ngcontent-c23="" _nghost-c10="" class="ng-tns-c10-5">
                                            <div _ngcontent-c10="" class="searchBoxWrap wi-100" outclick="">
                                                <div _ngcontent-c10="" class="ng-tns-c10-5" id="styleHolder">
                                                </div>
                                                <form _ngcontent-c10=""
                                                      class="searchBox wi-100 firstStyle ng-pristine ng-valid ng-touched"
                                                      novalidate="">
                                                    <input _ngcontent-c10=""
                                                           class="wi-100 ng-pristine ng-valid ng-touched"
                                                           autocomplete="off" name="search-input" title="جستجو"
                                                           type="text"
                                                           placeholder="جستجو در دوره‌های انیمیشن و سه‌بعدی">
                                                    <a _ngcontent-c10=""
                                                       class="searchButton flex-row jus-center al-center"
                                                       rel="animation-3d"
                                                       href="/animation-3d/keyword-/label-none/page-1">
                                                        <i _ngcontent-c10="" class="fas fa-search"></i>
                                                    </a>
                                                    <!---->
                                                </form>

                                                <!---->
                                            </div>
                                            <style></style>
                                        </search-box>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div _ngcontent-c23="" class="container second">

                        <div _ngcontent-c23="" class="flex-row jus-center al-start wrapped" style="text-align: right">
                            <div _ngcontent-c23="" class="labelsCol wi-md-25 wi-sm-100 wi-xs-100">
                                <!---->
                                <div _ngcontent-c23="" class="labelsBox">

                                    <!---->
                                    <div _ngcontent-c23="" class="scopeWrapper">
                                        <div _ngcontent-c23="" class="singleScope wi-100">
                                            <div _ngcontent-c23="" class="flex-row jus-between scopeTitle">
                                                <div _ngcontent-c23="" class="scopeName">فیلتر های دوره ها</div>
                                                <div _ngcontent-c23=""
                                                     class="angleHolder flex-row jus-center al-center">
                                                    <i _ngcontent-c23="" aria-hidden="true" class="fa fa-angle-left"
                                                       style="transform: rotate(90deg);"></i>

                                                </div>
                                            </div>
                                            <div _ngcontent-c23="" class="labelList wi-100"
                                                 style="height: 600px !important;">
                                                <div _ngcontent-c23="" class="topLine"></div>

                                                <!---->

                                                <form action="{{url('/courses')}}">

                                                    <div class="form-group">
                                                        <label for="type"> نمایش دوره ها : </label>
                                                        <br>
                                                        <select name="type" id="type">
                                                            <option value="all">همه دوره ها</option>
                                                            <option value="vip">اعضای ویژه</option>
                                                            <option value="cash">نقدی</option>
                                                            <option value="free">رایگان</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type"> دوره ها بر اساس دسته : </label>
                                                        <select name="category" id="category">
                                                            <option value="all">همه دوره ها</option>
                                                            @foreach(\App\Category::all() as $category)
                                                                <option
                                                                    value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-danger" type="submit"
                                                                style="width: 50px">فیلتر
                                                        </button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div _ngcontent-c23=""
                                 class="resultsCol flex-row jus-start wrapped wi-md-75 wi-sm-100 wi-xs-100">


                                @foreach($courses as $course)
                                    <carousel-item _ngcontent-c12="" class="max-3" _nghost-c19=""
                                                   style="margin-right: 0px;">
                                        <div _ngcontent-c19="" class="itemParent">
                                            <content-card _ngcontent-c12="" _nghost-c20=""><!---->
                                                <div _ngcontent-c20="" class="contentCardParent wi-100">
                                                    <!---->
                                                    <!---->
                                                    <div _ngcontent-c20="" class="contentCardInnerContainer">
                                                        <!---->
                                                        <!----><a _ngcontent-c20=""
                                                                  class="flex-col wi-100 contentMainLink"
                                                                  href="{{$course->path()}}">

                                                            <div _ngcontent-c20="" class="contentImage wi-100"
                                                                 style="background-image: url({{$course->images['thumb']}});">
                                                            </div>
                                                            <div _ngcontent-c20="" class="contentBackImg"></div>
                                                            <h3 _ngcontent-c20=""
                                                                class="cardTitle flex-col jus-between al-start"
                                                                title="{{$course->title}}">
                                                                    <span _ngcontent-c20="">  {{$course->title}}<span
                                                                            _ngcontent-c20=""></span></span>
                                                                <!----><a _ngcontent-c20=""
                                                                          class="courseAuthor flex-row jus-start al-center"
                                                                          title="صفحه‌ی
                                                                             {{$course->user->name}}
                                                                              در فرانش"
                                                                          href="/">
                                                                    <div _ngcontent-c20="" class="authorImg"
                                                                         style="
                                                                         @if($course->user->img == null)

                                                                             background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);
                                                                         @else

                                                                             background-image:
                                                                             url($course->user->img['thumb']
                                                                         @endif
                                                                             ">
                                                                    </div>
                                                                    <span _ngcontent-c20=""
                                                                          class="authorName">{{$course->user->name}}</span>
                                                                </a>
                                                            </h3>
                                                            <div _ngcontent-c20=""
                                                                 class="flex-row jus-between al-center detailRow">
                                                                <div _ngcontent-c20=""
                                                                     class="flex-row jus-between al-center wrapped"
                                                                     style="max-width: calc(100% - 72px);">
                                                                    <!---->
                                                                    <div _ngcontent-c20=""
                                                                         class="contentTime flex-row al-center">

                                                                        <!----><span
                                                                            _ngcontent-c20="">{{$course->time}}</span>
                                                                        <!---->
                                                                        <i class="fas fa-clock"></i>
                                                                    </div>
                                                                    <!---->
                                                                    <div>
                                                                        @if($rates[0]->rating =='1')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                        @elseif($rates[0]->rating =='2')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                        @elseif($rates[0]->rating =='3')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                        @elseif($rates[0]->rating =='4')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                        @elseif($rates[0]->rating =='5')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>



                                                                        @endif
                                                                    </div>
                                                                </div>


                                                                <!---->
                                                                <div _ngcontent-c20=""
                                                                     class="contentPrice flex-col al-center">
                                                                    <!---->
                                                                    @if($course->discount != null)
                                                                        <div _ngcontent-c18="" class="discountPrice">
                                                                            @if($course->price==0)
                                                                                رایگان
                                                                            @else

                                                                                {{$course->price}}
                                                                            @endif
                                                                        </div>
                                                                        <div _ngcontent-c18="" class="endPrice">

                                                                            {{$course->discount}}

                                                                        </div>
                                                                    @else
                                                                        <div _ngcontent-c18=""
                                                                             class="contentPrice flex-col al-center">
                                                                            <!---->
                                                                            <div _ngcontent-c18="" class="endPrice">
                                                                                {{$course->price}}
                                                                            </div>
                                                                        </div>

                                                                    @endif
                                                                </div>

                                                                <!---->
                                                            </div>
                                                        </a>

                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </content-card>
                                        </div>
                                    </carousel-item>

                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </search>
        </main>

    @else


        <alert _ngcontent-c0="" _nghost-c2="" class="ng-tns-c2-1">
            <div _ngcontent-c2="" class="ng-tns-c2-1" id="alertContainer">
                <div _ngcontent-c2="" class="ng-tns-c2-1" id="alert-holder">
                    <!---->
                </div>
            </div>


        </alert>
        <loading-bar _ngcontent-c0="" _nghost-c3="">
            <div _ngcontent-c3="" class="loadingBarFill done" style="width: 100%;"></div>
        </loading-bar>
        <router-outlet _ngcontent-c0=""></router-outlet>
        <home>
            <home-unreg class="homeUnreg" _nghost-c12="">
                <section _ngcontent-c12="" class="topSec">
                    <div _ngcontent-c12="" class="container al-center">
                        <h1 _ngcontent-c12="" style="color: #fff">آموزش آنلاین ویدیویی، مهارت برای اشتغال | فرانش</h1>
                        <h2 _ngcontent-c12="" style="color: #fff">آموزش‌های کاربردی از حرفه‌ای‌ها</h2>
                        <div _ngcontent-c12="" class="wi-lg-55 wi-md-60 wi-sm-80 wi-xs-95 searchBox">
                            <search-box _ngcontent-c12="" _nghost-c10="" class="ng-tns-c10-4">
                                <div _ngcontent-c10="" class="searchBoxWrap wi-100" outclick="">
                                    <div _ngcontent-c10="" class="ng-tns-c10-4" id="styleHolder">
                                    </div>
                                    <form _ngcontent-c10=""
                                          class="searchBox wi-100 secondStyle ng-untouched ng-pristine ng-valid"
                                          novalidate="">
                                        <input _ngcontent-c10="" class="wi-100 ng-untouched ng-pristine ng-valid"
                                               autocomplete="off" name="search-input" title="جستجو" type="text"
                                               placeholder="دوست داری چی یاد بگیری؟">
                                        <a _ngcontent-c10="" class="searchButton flex-row jus-center al-center"
                                           rel="all"
                                           href="/search/keyword-/label-none/page-1">
                                            <i _ngcontent-c10="" class="fas fa-search flex-row"></i>
                                        </a>
                                        <!---->
                                    </form>

                                    <!---->
                                </div>
                                <style></style>
                            </search-box>
                        </div>
                        <div _ngcontent-c12="" class="flex-row jus-center wi-100">
                            <div _ngcontent-c12="" class="flex-row wi-md-70 wi-lg-60 jus-around wrapped">
                                <!---->
                                <home-stats _ngcontent-c12="" _nghost-c14="">
                                    <div _ngcontent-c14="" class="flex-col al-center statParent">
                                        <div _ngcontent-c14="" class="statIcon wi-50"
                                             style="background-image: url({{asset('Home/image/mi.png')}});"></div>
                                        <div _ngcontent-c14="" class="flex-col al-center">
        <span _ngcontent-c14="">
            <span _ngcontent-c14="" class="num">۷۰۴,۷۱۶</span>

        </span>
                                            <span _ngcontent-c14="" class="title">دقیقه آموزش کاربردی</span>
                                        </div>
                                    </div>
                                </home-stats>
                                <home-stats _ngcontent-c12="" _nghost-c14="">
                                    <div _ngcontent-c14="" class="flex-col al-center statParent">
                                        <div _ngcontent-c14="" class="statIcon wi-50"
                                             style="background-image: url(/Home/image/course.png);"></div>
                                        <div _ngcontent-c14="" class="flex-col al-center">
        <span _ngcontent-c14="">
            <span _ngcontent-c14="" class="num">۴,۷۸۰</span>

        </span>
                                            <span _ngcontent-c14="" class="title">عدد دوره آموزشی</span>
                                        </div>
                                    </div>
                                </home-stats>
                                <home-stats _ngcontent-c12="" _nghost-c14="">
                                    <div _ngcontent-c14="" class="flex-col al-center statParent">
                                        <div _ngcontent-c14="" class="statIcon wi-50"
                                             style="background-image: url(/Home/image/re.png);"></div>
                                        <div _ngcontent-c14="" class="flex-col al-center">
        <span _ngcontent-c14="">
            <span _ngcontent-c14="" class="num">۹۹۶,۵۰۰</span>

        </span>
                                            <span _ngcontent-c14="" class="title">نفر ثبت نام در دوره</span>
                                        </div>
                                    </div>
                                </home-stats>
                            </div>
                        </div>


                    </div>
                </section>

                <section _ngcontent-c12="" class="secondSec">
                    <div _ngcontent-c12="" class="container al-center">
                        <!---->
                        <best-contents _ngcontent-c12="" style="padding: 0 15px" _nghost-c16="">
                            <div _ngcontent-c16="" class="bestContents wi-100">
                                <div _ngcontent-c16="" class="faraTitle wi-100">
                                    <div _ngcontent-c16="" class="title">بهترین دوره‌های آموزشی</div>
                                </div>
                                <div _ngcontent-c16="" class="wi-100" style="position: relative">
                                    <!---->
                                    <div _ngcontent-c16="" checkscroll="" class="catSelector wi-100">
                                        <div _ngcontent-c16="" class="flex-row jus-center al-center"
                                             style="width: max-content; margin: 0 auto;">
                                            <!---->
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName selected">کسب‌وکار</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">انیمیشن و سه‌بعدی</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">فیلم و صدا</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">وب</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">برنامه‌نویسی</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">شبکه و امنیت</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">زبان‌های خارجی</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">سبک زندگی</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">زندگی دیجیتال</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">آشپزی</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">طراحی</div>
                                                <!---->
                                                <div _ngcontent-c16="" class="divider"></div>
                                            </div>
                                            <div _ngcontent-c16="" class="catWrapper flex-row al-center jus-start">
                                                <div _ngcontent-c16="" class="categoryName">مدرسه و دانشگاه</div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <!---->
                                    <div _ngcontent-c16="" class="overGrads rightGrad"></div>
                                </div>
                                <!---->
                                <div _ngcontent-c16="" class="contentsWrapper flex-row al-start jus-between wrapped">
                                    <!---->
                                    @foreach($courses as $course)

                                        <div _ngcontent-c19="" class="singleCard wi-lg-25 wi-md-33 wi-sm-100 wi-xs-100"
                                             style="    padding: 7.5px;">
                                            <content-card _ngcontent-c19="" _nghost-c18="">

                                                <div _ngcontent-c18="" class="contentCardParent wi-100">
                                                    <!---->
                                                    <div _ngcontent-c18=""
                                                         class="discountBadge flex-col al-center jus-center">
                                                        <span _ngcontent-c18="" class="discountPercentage">۳۰%</span>
                                                        تخفیف
                                                    </div>
                                                    <!---->
                                                    <div _ngcontent-c18="" class="contentCardInnerContainer">

                                                        <a _ngcontent-c18=""
                                                           class="flex-col wi-100 contentMainLink"
                                                           href="{{$course->path()}}">

                                                            <div _ngcontent-c18="" class="contentImage wi-100"
                                                                 style="background-image: url({{$course->images['thumb']}});">
                                                            </div>
                                                            <div _ngcontent-c18="" class="contentBackImg"></div>
                                                            <h3 _ngcontent-c18=""
                                                                class="cardTitle flex-col jus-between al-start"
                                                                title="{{$course->title}}">
                                                            <span _ngcontent-c18="">{{$course->title}}<span
                                                                    _ngcontent-c18=""></span></span>
                                                                <!----><a _ngcontent-c18=""
                                                                          class="courseAuthor flex-row jus-start al-center"
                                                                          title="صفحه‌ی
                                                                        {{$course->user->name}}
                                                                              در فرانش"
                                                                          href="/author/DrStartup">
                                                                    <div _ngcontent-c18="" class="authorImg"

                                                                         style="
                                                                         @if($course->user->img == null)

                                                                             background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);">
                                                                        @else

                                                                            background-image:
                                                                            url($course->user->img['thumb']">
                                                                        @endif


                                                                    </div>
                                                                    <span _ngcontent-c18=""
                                                                          class="authorName">  {{$course->user->name}}</span>
                                                                </a>
                                                            </h3>
                                                            <div _ngcontent-c18=""
                                                                 class="flex-row jus-between al-center detailRow">
                                                                <div _ngcontent-c18=""
                                                                     class="flex-row jus-between al-center wrapped"
                                                                     style="max-width: calc(100% - 72px);">
                                                                    <!---->
                                                                    <div _ngcontent-c18=""
                                                                         class="contentTime flex-row al-center">

                                                                        <!----><span
                                                                            _ngcontent-c18=""
                                                                            style="margin-left: 3px">{{$course->time}}</span>
                                                                        <!---->
                                                                        <i class="fas fa-clock"></i>
                                                                        {{--                                                                        <i _ngcontent-c18="" aria-hidden="true"--}}
                                                                        {{--                                                                           class="fw-clock-2-filled"></i>--}}
                                                                    </div>
                                                                    <!---->
                                                                    <div>
                                                                        @if($rates[0]->rating =='1')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                        @elseif($rates[0]->rating =='2')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                        @elseif($rates[0]->rating =='3')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                        @elseif($rates[0]->rating =='4')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                        @elseif($rates[0]->rating =='5')
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                            <i class="fas fa-star" aria-hidden="true"
                                                                               style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>



                                                                        @endif
                                                                    </div>
                                                                    {{--                                                                    <div _ngcontent-c18=""--}}
                                                                    {{--                                                                         class="contentRate flex-row al-center">--}}


                                                                    {{--                                                                        <star-rate _ngcontent-c18="" _nghost-c22="">--}}
                                                                    {{--                                                                            <div _ngcontent-c22=""--}}
                                                                    {{--                                                                                 class="flex-row jus-start al-center"--}}
                                                                    {{--                                                                                 dir="rtl" id="rate-container-back">--}}
                                                                    {{--                                                                                <!----><span _ngcontent-c22="">--}}
                                                                    {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--            <span _ngcontent-c22="" class="tooltiptext">بد</span>--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--            <span _ngcontent-c22="" class="tooltiptext">ضعیف</span>--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--            <span _ngcontent-c22="" class="tooltiptext">معمولی</span>--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--            <span _ngcontent-c22="" class="tooltiptext">خوب</span>--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--            <span _ngcontent-c22="" class="tooltiptext">عالی</span>--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span>--}}
                                                                    {{--                                                                                <!---->--}}
                                                                    {{--                                                                                <!---->--}}
                                                                    {{--                                                                                <div _ngcontent-c22=""--}}
                                                                    {{--                                                                                     class="countTooltip">--}}
                                                                    {{--                                                                                    <span _ngcontent-c22=""--}}
                                                                    {{--                                                                                          class="rateNum">3.89</span>--}}
                                                                    {{--                                                                                    از ۳۷ رای--}}
                                                                    {{--                                                                                </div>--}}
                                                                    {{--                                                                            </div>--}}
                                                                    {{--                                                                            <div _ngcontent-c22=""--}}
                                                                    {{--                                                                                 class="flex-row jus-start al-center"--}}
                                                                    {{--                                                                                 dir="rtl" id="rate-container">--}}
                                                                    {{--                                                                                <!----><span _ngcontent-c22="">--}}
                                                                    {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-badge-6-filled"--}}
                                                                    {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"--}}
                                                                    {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                    {{--        </i>--}}
                                                                    {{--    </span><span _ngcontent-c22="">--}}
                                                                    {{--        <!---->--}}
                                                                    {{--    </span>--}}
                                                                    {{--                                                                            </div>--}}
                                                                    {{--                                                                        </star-rate>--}}
                                                                    {{--                                                                    </div>--}}
                                                                </div>


                                                                <!---->
                                                                <div _ngcontent-c18=""
                                                                     class="contentPrice flex-col al-center">
                                                                    <!---->
                                                                    <div _ngcontent-c18="" class="discountPrice">۷۹,۰۰۰
                                                                    </div>
                                                                    <div _ngcontent-c18="" class="endPrice">
                                                                        @if($course->price==0)
                                                                            رایگان
                                                                        @else

                                                                            {{$course->price}}
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <!---->
                                                            </div>
                                                        </a>

                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </content-card>
                                        </div>

                                    @endforeach
                                </div>
                                <div _ngcontent-c16="" class="flex-row jus-center al-center wi-100">
                                    <!----><a _ngcontent-c16="" class="lightBlueBtn" href="/business">
                                        دیدن تمامی دوره‌های آموزشی کسب‌وکار
                                    </a>
                                    <!----><a _ngcontent-c16="" class="actionBtn" href="/login;register=true">ثبت‌نام در
                                        فرانش</a>
                                </div>
                            </div>
                        </best-contents>
                    </div>
                </section>
                <section _ngcontent-c12="" class="secondSec">
                    <div _ngcontent-c12="" class="container al-center">

                        <div _ngcontent-c12="" class="faraTitle" style="margin-top: 30px">
                            <div _ngcontent-c12="" class="title">مجموعه‌های آموزشی</div>
                        </div>
                        <div _ngcontent-c12="" class="flex-row wi-100 jus-around wrapped pathsWrapper">
                            <!---->
                        </div>
                    </div>
                </section>
                <section _ngcontent-c12="" class="thirdSec">
                    <div _ngcontent-c12="" class="container al-start">

                        <carousel _ngcontent-c12="" _nghost-c18="">
                            <div _ngcontent-c18="" class="carousel wi-100">
                                <div _ngcontent-c18="" class="flex-row jus-between al-end">
                                    <h3 _ngcontent-c18="" style="
padding-right: 15px;
    font-size: 23px;
    margin-top: 30px;
    margin-bottom: 0;
    color: #383d48;
">جدیدترین دوره‌های آموزشی</h3>
                                    <!---->
                                </div>
                                <div _ngcontent-c18="" class="carouselContents flex-row al-start jus-start wi-100">
                                    <div _ngcontent-c18="" class="shadowHiders hiderLeft"></div>
                                    <div _ngcontent-c18="" class="shadowHiders hiderRight"></div>

                                    @foreach($courses as $course)
                                        <carousel-item _ngcontent-c12="" class="max-3" _nghost-c19=""
                                                       style="margin-right: 0px;">
                                            <div _ngcontent-c19="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c20=""><!---->
                                                    <div _ngcontent-c20="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <!---->
                                                        <div _ngcontent-c20="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c20=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="{{$course->path()}}">

                                                                <div _ngcontent-c20="" class="contentImage wi-100"
                                                                     style="background-image: url({{$course->images['thumb']}});">
                                                                </div>
                                                                <div _ngcontent-c20="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c20=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="{{$course->title}}">
                                                                    <span _ngcontent-c20="">  {{$course->title}}<span
                                                                            _ngcontent-c20=""></span></span>
                                                                    <!----><a _ngcontent-c20=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی
                                                                             {{$course->user->name}}
                                                                                  در فرانش"
                                                                              href="/">
                                                                        <div _ngcontent-c20="" class="authorImg"
                                                                             style="
                                                                             @if($course->user->img == null)

                                                                                 background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);">
                                                                            @else

                                                                                background-image:
                                                                                url($course->user->img['thumb']">
                                                                            @endif
                                                                            ">
                                                                        </div>
                                                                        <span _ngcontent-c20=""
                                                                              class="authorName">{{$course->user->name}}</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c20=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c20=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c20=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c20="">{{$course->time}}</span>
                                                                            <!---->
                                                                            <i class="fas fa-clock"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div>
                                                                            @if($rates[0]->rating =='1')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            @elseif($rates[0]->rating =='2')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                            @elseif($rates[0]->rating =='3')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                            @elseif($rates[0]->rating =='4')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                            @elseif($rates[0]->rating =='5')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>



                                                                            @endif
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c20=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        @if($course->discount != null)
                                                                            <div _ngcontent-c18=""
                                                                                 class="discountPrice">
                                                                                @if($course->price==0)
                                                                                    رایگان
                                                                                @else

                                                                                    {{$course->price}}
                                                                                @endif
                                                                            </div>
                                                                            <div _ngcontent-c18="" class="endPrice">

                                                                                {{$course->discount}}

                                                                            </div>
                                                                        @else
                                                                            <div _ngcontent-c18=""
                                                                                 class="contentPrice flex-col al-center">
                                                                                <!---->
                                                                                <div _ngcontent-c18="" class="endPrice">
                                                                                    {{$course->price}}
                                                                                </div>
                                                                            </div>

                                                                        @endif
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>

                                    @endforeach

                                </div>
                            </div>
                        </carousel>
                    </div>
                </section>
                <section _ngcontent-c12="" class="thirdSec">
                    <div _ngcontent-c12="" class="container al-start">

                        <carousel _ngcontent-c12="" _nghost-c18="">
                            <div _ngcontent-c18="" class="carousel wi-100">
                                <div _ngcontent-c18="" class="flex-row jus-between al-end">
                                    <h3 _ngcontent-c18="" style="
padding-right: 15px;
    font-size: 23px;
    margin-top: 30px;
    margin-bottom: 0;
    color: #383d48;
">پرمخاطب‌ترین دوره‌های آموزشی
                                    </h3>
                                    <!---->
                                </div>
                                <div _ngcontent-c18="" class="carouselContents flex-row al-start jus-start wi-100">
                                    <div _ngcontent-c18="" class="shadowHiders hiderLeft"></div>
                                    <div _ngcontent-c18="" class="shadowHiders hiderRight"></div>

                                    @foreach($courses as $course)
                                        <carousel-item _ngcontent-c12="" class="max-4" _nghost-c19=""
                                                       style="margin-right: 0px;">
                                            <div _ngcontent-c19="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c20=""><!---->
                                                    <div _ngcontent-c20="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <!---->
                                                        <div _ngcontent-c20="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c20=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="{{$course->path()}}">

                                                                <div _ngcontent-c20="" class="contentImage wi-100"
                                                                     style="background-image: url({{$course->images['thumb']}});">
                                                                </div>
                                                                <div _ngcontent-c20="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c20=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="{{$course->title}}">
                                                                    <span _ngcontent-c20="">  {{$course->title}}<span
                                                                            _ngcontent-c20=""></span></span>
                                                                    <!----><a _ngcontent-c20=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی
                                                                             {{$course->user->name}}
                                                                                  در فرانش"
                                                                              href="/">
                                                                        <div _ngcontent-c20="" class="authorImg"
                                                                             style="
                                                                             @if($course->user->img == null)

                                                                                 background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);">
                                                                            @else

                                                                                background-image:
                                                                                url($course->user->img['thumb']">
                                                                            @endif
                                                                            ">
                                                                        </div>
                                                                        <span _ngcontent-c20=""
                                                                              class="authorName">{{$course->user->name}}</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c20=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c20=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c20=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c20="">{{$course->time}}</span>
                                                                            <!---->
                                                                            <i class="fas fa-clock"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div>
                                                                            @if($rates[0]->rating =='1')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                            @elseif($rates[0]->rating =='2')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                            @elseif($rates[0]->rating =='3')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                            @elseif($rates[0]->rating =='4')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                                            @elseif($rates[0]->rating =='5')
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                                                <i class="fas fa-star"
                                                                                   aria-hidden="true"
                                                                                   style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>



                                                                            @endif
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c20=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        @if($course->discount != null)
                                                                            <div _ngcontent-c18=""
                                                                                 class="discountPrice">
                                                                                @if($course->price==0)
                                                                                    رایگان
                                                                                @else

                                                                                    {{$course->price}}
                                                                                @endif
                                                                            </div>
                                                                            <div _ngcontent-c18="" class="endPrice">

                                                                                {{$course->discount}}

                                                                            </div>
                                                                        @else
                                                                            <div _ngcontent-c18=""
                                                                                 class="contentPrice flex-col al-center">
                                                                                <!---->
                                                                                <div _ngcontent-c18="" class="endPrice">
                                                                                    {{$course->price}}
                                                                                </div>
                                                                            </div>

                                                                        @endif
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>

                                    @endforeach

                                </div>
                            </div>
                        </carousel>
                    </div>
                </section>
                <section _ngcontent-c12="" class="fourthSec">
                    <div _ngcontent-c12="" class="container al-center">
                        <h3 _ngcontent-c12=""> دسته بندی آموزش ها </h3>
                        <div _ngcontent-c12="" class="flex-row wi-100 jus-around wrapped">
                            <!---->
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(57, 189, 222);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/education">

                                        <i _ngcontent-c21="" class="fas fa-school"></i>
                                        <div _ngcontent-c21="" class="catTitle">مدرسه و دانشگاه</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(57, 189, 222);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(229, 154, 19);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/design">

                                        <i _ngcontent-c21="" class="fas fa-palette"></i>
                                        <div _ngcontent-c21="" class="catTitle">طراحی</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(229, 154, 19);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(204, 95, 55);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/cooking">

                                        <i _ngcontent-c21="" class="fas fa-cocktail"></i>
                                        <div _ngcontent-c21="" class="catTitle">آشپزی</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(204, 95, 55);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(246, 190, 120);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/other">

                                        <i _ngcontent-c21="" class="fas fa-oil-can"></i>
                                        <div _ngcontent-c21="" class="catTitle">گوناگون</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(246, 190, 120);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(204, 95, 55);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/digilife">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-3"></i>
                                        <div _ngcontent-c21="" class="catTitle">زندگی دیجیتال</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(204, 95, 55);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(4, 145, 131);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/foreign-languages">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-5"></i>
                                        <div _ngcontent-c21="" class="catTitle">زبان‌های خارجی</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(4, 145, 131);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(48, 121, 171);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/network-security">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-21"></i>
                                        <div _ngcontent-c21="" class="catTitle">شبکه و امنیت</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(48, 121, 171);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(92, 184, 96);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/programming">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-30"></i>
                                        <div _ngcontent-c21="" class="catTitle">برنامه‌نویسی</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(92, 184, 96);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(232, 84, 91);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/web">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-23"></i>
                                        <div _ngcontent-c21="" class="catTitle">وب</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(232, 84, 91);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(158, 53, 158);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/film-audio">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-13"></i>
                                        <div _ngcontent-c21="" class="catTitle">فیلم و صدا</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(158, 53, 158);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(125, 102, 158);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/animation-3d">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-10"></i>
                                        <div _ngcontent-c21="" class="catTitle">انیمیشن و سه‌بعدی</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(125, 102, 158);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                            <category-card _ngcontent-c12="" _nghost-c21="">
                                <div _ngcontent-c21="" class="catCardParent" style="border-color: rgb(99, 122, 145);">
                                    <a _ngcontent-c21="" class="flex-col jus-center al-center wi-100 hi-100"
                                       href="/business">

                                        <i _ngcontent-c21="" class="icon icon-faranesh-font-18"></i>
                                        <div _ngcontent-c21="" class="catTitle">کسب‌وکار</div>
                                    </a>

                                    <div _ngcontent-c21="" class="theBg"
                                         style="background-color: rgb(99, 122, 145);"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff1"></div>
                                    <div _ngcontent-c21="" class="dropEff dropEff2"></div>
                                </div>
                            </category-card>
                        </div>
                        <a _ngcontent-c12="" href="/search/keyword-/label-none/page-1">
                            <h4 _ngcontent-c12=""><i _ngcontent-c12="" aria-hidden="true" class="fa fa-caret-left"></i>
                                دوست داری چه چیزی یاد بگیری؟ </h4>
                        </a>
                    </div>
                </section>
            </home-unreg>
        </home>


    @endif


@endsection
@section('js')
    <script>
        function openComment(CommentName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                x[i].class = "active";
            }
            document.getElementById(CommentName).style.display = "block";
            document.getElementById(CommentName).class = "active";
        }
    </script>
@endsection
