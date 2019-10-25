ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [49.338848, 12.861112],
            zoom: 2.5
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 32,
            clusterDisableClickZoom: true,
        });

    // Чтобы задать опции одиночным объектам и кластерам,
    // обратимся к дочерним коллекциям ObjectManager.
    objectManager.objects.options.set('preset', 'islands#orangeDotIcon');
    objectManager.clusters.options.set('preset', 'islands#orangeClusterIcons');
    myMap.geoObjects.add(objectManager);

    $.ajax({
        url: "assets/js/data.json"
    }).done(function(data) {
        objectManager.add(data);
        //myMap.setBounds(myMap.geoObjects.getBounds());
    });

}