let controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
        triggerElement: "#cusSec",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleCus', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#descSec",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleDesc', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#features",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleVar', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#details",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleDet', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#video",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleVid', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#pricing",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visiblePricing', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#testi",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleTesti', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#order",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleOrder', 'visible')
    .reverse(false)
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#footer",
        triggerHook: 0.9,
        duration: "80%",
        offset: 50
    })
    .setClassToggle('#visibleFooter', 'visible')
    .reverse(false)
    .addTo(controller);