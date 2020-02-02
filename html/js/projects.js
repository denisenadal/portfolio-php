var macyContainers = $("div[data-sizes]");
var macyInstances = [];
if (macyContainers.length){
    macyContainers.each(function (index){
        var sizes = $(this).data('sizes').toString() || false;
        var id = $(this).attr('id') || false;
        if (sizes && id) {
            var newMacy = macyWrapper("#"+id, {
                hd: sizes[0],
                sd: sizes[1],
                tablet: sizes[2],
                mobile: sizes[3],
            });
            macyInstances.push(newMacy)
        }
    });
}