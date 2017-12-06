var iconSelect;

        window.onload = function(){

          iconSelect = new IconSelect("my-icon-select",
              {'selectedIconWidth':55,
              'selectedIconHeight':55,
              'selectedBoxPadding':5,
              'iconsWidth':55,
              'iconsHeight':55,
              'boxIconSpace':5,
              'vectoralIconNumber':8,
              'horizontalIconNumber':1});

          var icons = [];
          icons.push({'iconFilePath':'../../img/emojis/angel.png', 'iconValue':'1'});
          icons.push({'iconFilePath':'../../img/emojis/angry.png', 'iconValue':'2'});
          icons.push({'iconFilePath':'../../img/emojis/angry(1).png', 'iconValue':'3'});
          icons.push({'iconFilePath':'../../img/emojis/arrogant.png', 'iconValue':'4'});
          icons.push({'iconFilePath':'../../img/emojis/bored.png', 'iconValue':'5'});
          icons.push({'iconFilePath':'../../img/emojis/confused.png', 'iconValue':'6'});
          icons.push({'iconFilePath':'../../img/emojis/cool (1).png', 'iconValue':'7'});
          icons.push({'iconFilePath':'../../img/emojis/cool.png', 'iconValue':'8'});
          icons.push({'iconFilePath':'../../img/emojis/crying (1).png', 'iconValue':'9'});
          icons.push({'iconFilePath':'../../img/emojis/crying (2).png', 'iconValue':'10'});
          icons.push({'iconFilePath':'../../img/emojis/crying.png', 'iconValue':'11'});
          icons.push({'iconFilePath':'../../img/emojis/cute.png', 'iconValue':'12'});
          icons.push({'iconFilePath':'../../img/emojis/embarrassed.png', 'iconValue':'13'});
          icons.push({'iconFilePath':'../../img/emojis/emoji.png', 'iconValue':'14'});
          icons.push({'iconFilePath':'../../img/emojis/greed.png', 'iconValue':'15'});
          icons.push({'iconFilePath':'../../img/emojis/happy (1).png', 'iconValue':'16'});
          icons.push({'iconFilePath':'../../img/emojis/happy (2).png', 'iconValue':'17'});
          icons.push({'iconFilePath':'../../img/emojis/happy (3).png', 'iconValue':'18'});
          icons.push({'iconFilePath':'../../img/emojis/happy (4).png', 'iconValue':'19'});
          icons.push({'iconFilePath':'../../img/emojis/happy (5).png', 'iconValue':'20'});
          icons.push({'iconFilePath':'../../img/emojis/happy (6).png', 'iconValue':'21'});
          icons.push({'iconFilePath':'../../img/emojis/happy.png', 'iconValue':'22'});
          icons.push({'iconFilePath':'../../img/emojis/happy(7).png', 'iconValue':'23'});
          icons.push({'iconFilePath':'../../img/emojis/in-love.png', 'iconValue':'24'});
          icons.push({'iconFilePath':'../../img/emojis/kiss (1).png', 'iconValue':'25'});
          icons.push({'iconFilePath':'../../img/emojis/kiss.png', 'iconValue':'26'});
          icons.push({'iconFilePath':'../../img/emojis/laughing (1).png', 'iconValue':'27'});
          icons.push({'iconFilePath':'../../img/emojis/laughing (2).png', 'iconValue':'28'});
          icons.push({'iconFilePath':'../../img/emojis/laughing.png', 'iconValue':'29'});
          icons.push({'iconFilePath':'../../img/emojis/muted.png', 'iconValue':'30'});
          icons.push({'iconFilePath':'../../img/emojis/nerd.png', 'iconValue':'31'});
          icons.push({'iconFilePath':'../../img/emojis/sad.png', 'iconValue':'32'});
          icons.push({'iconFilePath':'../../img/emojis/sad1.png', 'iconValue':'33'});
          icons.push({'iconFilePath':'../../img/emojis/sad2.png', 'iconValue':'34'});
          icons.push({'iconFilePath':'../../img/emojis/scare.png', 'iconValue':'35'});
          icons.push({'iconFilePath':'../../img/emojis/serious.png', 'iconValue':'36'});
          icons.push({'iconFilePath':'../../img/emojis/shocked.png', 'iconValue':'37'});
          icons.push({'iconFilePath':'../../img/emojis/sick.png', 'iconValue':'38'});
          icons.push({'iconFilePath':'../../img/emojis/sleepy.png', 'iconValue':'39'});
          icons.push({'iconFilePath':'../../img/emojis/smart.png', 'iconValue':'40'});
          icons.push({'iconFilePath':'../../img/emojis/surprised (1).png', 'iconValue':'41'});
          icons.push({'iconFilePath':'../../img/emojis/surprised (2).png', 'iconValue':'42'});
          icons.push({'iconFilePath':'../../img/emojis/surprised (3).png', 'iconValue':'43'});
          icons.push({'iconFilePath':'../../img/emojis/surprised (4).png', 'iconValue':'44'});
          icons.push({'iconFilePath':'../../img/emojis/surprised.png', 'iconValue':'45'});
          icons.push({'iconFilePath':'../../img/emojis/suspicious.png', 'iconValue':'46'});
          icons.push({'iconFilePath':'../../img/emojis/tongue.png', 'iconValue':'47'});
          icons.push({'iconFilePath':'../../img/emojis/vain.png', 'iconValue':'48'});
          icons.push({'iconFilePath':'../../img/emojis/wink (1).png', 'iconValue':'49'});
          icons.push({'iconFilePath':'../../img/emojis/wink.png', 'iconValue':'50'});


          iconSelect.refresh(icons);

        };