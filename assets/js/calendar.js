try {
  (function (w, d) {
    !(function (bu, bv, bw, bx) {
      bu[bw] = bu[bw] || {};
      bu[bw].executed = [];
      bu.zaraz = { deferred: [], listeners: [] };
      bu.zaraz.q = [];
      bu.zaraz._f = function (by) {
        return async function () {
          var bz = Array.prototype.slice.call(arguments);
          bu.zaraz.q.push({ m: by, a: bz });
        };
      };
      for (const bA of ["track", "set", "debug"])
        bu.zaraz[bA] = bu.zaraz._f(bA);
      bu.zaraz.init = () => {
        var bB = bv.getElementsByTagName(bx)[0],
          bC = bv.createElement(bx),
          bD = bv.getElementsByTagName("title")[0];
        bD && (bu[bw].t = bv.getElementsByTagName("title")[0].text);
        bu[bw].x = Math.random();
        bu[bw].w = bu.screen.width;
        bu[bw].h = bu.screen.height;
        bu[bw].j = bu.innerHeight;
        bu[bw].e = bu.innerWidth;
        bu[bw].l = bu.location.href;
        bu[bw].r = bv.referrer;
        bu[bw].k = bu.screen.colorDepth;
        bu[bw].n = bv.characterSet;
        bu[bw].o = new Date().getTimezoneOffset();
        if (bu.dataLayer)
          for (const bH of Object.entries(
            Object.entries(dataLayer).reduce(
              (bI, bJ) => ({ ...bI[1], ...bJ[1] }),
              {}
            )
          ))
            zaraz.set(bH[0], bH[1], { scope: "page" });
        bu[bw].q = [];
        for (; bu.zaraz.q.length; ) {
          const bK = bu.zaraz.q.shift();
          bu[bw].q.push(bK);
        }
        bC.defer = !0;
        for (const bL of [localStorage, sessionStorage])
          Object.keys(bL || {})
            .filter((bN) => bN.startsWith("_zaraz_"))
            .forEach((bM) => {
              try {
                bu[bw]["z_" + bM.slice(7)] = JSON.parse(bL.getItem(bM));
              } catch {
                bu[bw]["z_" + bM.slice(7)] = bL.getItem(bM);
              }
            });
        bC.referrerPolicy = "origin";
        bC.src =
          "/cdn-cgi/zaraz/s.js?z=" +
          btoa(encodeURIComponent(JSON.stringify(bu[bw])));
        bB.parentNode.insertBefore(bC, bB);
      };
      ["complete", "interactive"].includes(bv.readyState)
        ? zaraz.init()
        : bu.addEventListener("DOMContentLoaded", zaraz.init);
    })(w, d, "zarazData", "script");
  })(window, document);
} catch (e) {
  throw (fetch("/cdn-cgi/zaraz/t"), e);
}
