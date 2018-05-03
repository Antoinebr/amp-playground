<!doctype html>
<html ⚡>
<head>
  <meta charset="utf-8">
  <title>My AMP Page</title>
  <link rel="canonical" href="self.html" />
  <meta name="viewport" content="width=device-width,minimum-scale=1">
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
  <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
  <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
  <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
  <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
  <style amp-custom>
    h1 {
      margin: 1rem;
    }
    #carousel .caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 8px;
      background: rgba(0, 0, 0, 0.6);
      color: #ddd;
      font-size: medium;
      max-height: 30%;
    }
    #carousel-control {
      padding: 10px 0;
      text-align: center;
    }
    .news-article-img-container {
      position: relative;
      width: 200px;
      height: 200px;
      background: grey;
    }
    .news-article-img-container img {
      object-fit: contain;
      /*background: grey;*/
    }
  </style>
</head>
<body>
  <h1>Cool Carousel Page</h1>
  <p> Selected slide:
    <span [text]="+selectedSlide + 1">1</span>/3
  </p>
  <amp-carousel id="carousel"
    layout="responsive"
    height="400"
    width="500"
    type="slides"
    [slide]="selectedSlide"
    on="slideChange:AMP.setState({selectedSlide: event.index})">
    <div class="slide">
      <amp-img src="https://placekitten.com/600/400"
        layout="fill"
        alt="Kitten"></amp-img>
      <div class="caption">
        Kitten!!!
      </div>
    </div>

    <div class="slide">
      <amp-img src="https://placebear.com/600/400"
        layout="fill"
        alt="Bear"></amp-img>
      <div class="caption">
        Bear!!!
      </div>
    </div>

    <div class="slide">
      <amp-img src="https://baconmockup.com/600/400/"
        layout="fill"
        alt="Meat"></amp-img>
      <div class="caption">
        Meat!!!
      </div>
    </div>
  </amp-carousel>
  <amp-carousel controls
    width="400"
    height="100"
    id="carousel-control">
    <amp-img src="https://placekitten.com/100/75"
      width="100"
      height="75"
      role="button"
      tabindex="0"
      [class]="selectedSlide == 0 ? 'selected' : ''"
      on="tap:AMP.setState({selectedSlide: 0})"></amp-img>
    <amp-img src="https://placebear.com/100/75"
      width="100"
      height="75"
      role="button"
      tabindex="1"
      [class]="selectedSlide == 1 ? 'selected' : ''"
      on="tap:AMP.setState({selectedSlide: 1})"></amp-img>
    <amp-img src="https://baconmockup.com/100/75/"
      width="100"
      height="75"
      role="button"
      tabindex="2"
      [class]="selectedSlide == 2 ? 'selected' : ''"
      on="tap:AMP.setState({selectedSlide: 2})"></amp-img>
  </amp-carousel>
  <amp-list width="auto"
    height="100"
    layout="fixed-height"
    src="https://delirious-meat.glitch.me/"
    items="articles"
    class="m1">
    <template type="amp-mustache"
      id="amp-template-id">
      <div id="news-articles">
        <p>{{{title}}}</p>
        <div class="news-article-img-container">
          <amp-img layout="fill"
            src="{{urlToImage}}{{^urlToImage}}https://www.beadsjar.co.uk/image/cache/data/category/colours/red-600x315.png{{/urlToImage}}"></amp-img>
        </div>
      </div>
    </template>
  </amp-list>
  <p>test</p>
</body>
</html>