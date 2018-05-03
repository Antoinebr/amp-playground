<!doctype html>
<html ⚡="" lang="en">

    <head>
        <meta charset="utf-8">
        <title>starter</title>
	    <link rel="canonical" href="https://www.ampstart.com/lol">


        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    
        <script async="" src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
        <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
        <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
    
        <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    

        <style amp-custom=""> 
            <?php include('style.css'); ?> 
            <?php include('app.css'); ?> 
        </style>

    </head>


    <body>

    <header>

        <amp-img class="u-block-auto" alt="logo" src="./logo.png" width="50" height="38" layout="fixed"></amp-img>

    </header>

        
        
       <!--
       
        The state 

       Also possible to AJAXIFY the state :

       <amp-state id="products" src="https://ampbyexample.com/json/products.json"></amp-state>

       -->
        <amp-state id="characters">
            <script type="application/json">
                {
                    "zoidberg": {
                        "style": "greenBackground",
                        "pic" : "http://lorempicsum.com/futurama/900/675/3"
                    },
                    "bender": {
                        "style": "redBackground",
                        "pic" : "http://lorempicsum.com/futurama/900/675/4"
                    }
                }
            </script>
        </amp-state>


        <amp-img 
            src="http://lorempicsum.com/futurama/900/675/4" 
            [src]="characters[currentCharacters].pic"
            width="900"
            height="675"
            layout="responsive"
        ></amp-img>
        
        
        <div class="container">
        
            <p class="u-mtm" [text]="'This is ' + currentCharacters + ' !!' ">This is Bender !!</p>

            <button  class="btn inline-block" on="tap:AMP.setState({currentCharacters: 'bender'})">Set to bender</button>

            <button class="btn inline-block" on="tap:AMP.setState({currentCharacters: currentCharacters == 'zoidberg' ? 'bender' : 'zoidberg' })">Set to zoidberg</button>
            
            <hr class="u-mbm">

            <amp-list width="auto"
                height="900"
                layout="fixed-height"
                src="https://delirious-meat.glitch.me/"
                items="articles"
                >
            
                <template type="amp-mustache"id="amp-template-id"><p>{{{title}}}</p></template>

            </amp-list>

        </div>


    </body>

</html>
