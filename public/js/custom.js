var iconSelect;

        window.onload = function(){

            iconSelect = new IconSelect("my-icon-select",
                {'selectedIconWidth':48,
                'selectedIconHeight':48,
                'selectedBoxPadding':5,
                'iconsWidth':48,
                'iconsHeight':48,
                'boxIconSpace':3,
                'vectoralIconNumber':8,
                'horizontalIconNumber':1});

            var icons = [];
            icons.push({'iconFilePath':'../storage/app/public/img/angel.png', 'iconValue':'1'});
            icons.push({'iconFilePath':'../img/angry.png', 'iconValue':'2'});
            icons.push({'iconFilePath':'/img/angry(1).png', 'iconValue':'3'});
            icons.push({'iconFilePath':'/img/arrogant.png', 'iconValue':'4'});
            icons.push({'iconFilePath':'/img/bored.png', 'iconValue':'5'});
            icons.push({'iconFilePath':'/img/confused.png', 'iconValue':'6'});
            icons.push({'iconFilePath':'/img/cool (1).png', 'iconValue':'7'});
            icons.push({'iconFilePath':'/img/cool.png', 'iconValue':'8'});
            icons.push({'iconFilePath':'/img/crying (1).png', 'iconValue':'9'});
            icons.push({'iconFilePath':'/img/crying (2).png', 'iconValue':'10'});
            icons.push({'iconFilePath':'/img/crying.png', 'iconValue':'11'});
            icons.push({'iconFilePath':'/img/cute.png', 'iconValue':'12'});
            icons.push({'iconFilePath':'/img/embarrassed.png', 'iconValue':'13'});
            icons.push({'iconFilePath':'/img/emoji.png', 'iconValue':'14'});

            iconSelect.refresh(icons);

        };

        $(document).ready(function(){
            $("#selectize").selectize();
        });
