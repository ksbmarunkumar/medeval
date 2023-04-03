<script defer="" referrerpolicy="origin" src="{{ asset('asset2/s.js') }}"></script>
<script src="{{ asset('asset2/jquery.min.js') }}"></script>
<script src="{{ asset('asset2/popper.js') }}"></script>
<script src="{{ asset('asset2/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset2/main.js') }}"></script>
<script defer="" src="{{ asset('asset2/vb26e4fa9e5134444860be286fd8771851679335129114') }}"
    integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw=="
    data-cf-beacon="{&quot;rayId&quot;:&quot;7afe3c0338ef8e80&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.3.0&quot;,&quot;si&quot;:100}"
    crossorigin="anonymous"></script>

<script nonce="dd700c59-734c-43a6-bbb9-c77f2f56ca04">
    (function(w, d) {
        ! function(di, dj, dk, dl) {
            di[dk] = di[dk] || {};
            di[dk].executed = [];
            di.zaraz = {
                deferred: [],
                listeners: []
            };
            di.zaraz.q = [];
            di.zaraz._f = function(dm) {
                return function() {
                    var dn = Array.prototype.slice.call(arguments);
                    di.zaraz.q.push({
                        m: dm,
                        a: dn
                    })
                }
            };
            for (const dp of ["track", "set", "debug"]) di.zaraz[dp] = di.zaraz._f(dp);
            di.zaraz.init = () => {
                var dq = dj.getElementsByTagName(dl)[0],
                    dr = dj.createElement(dl),
                    ds = dj.getElementsByTagName("title")[0];
                ds && (di[dk].t = dj.getElementsByTagName("title")[0].text);
                di[dk].x = Math.random();
                di[dk].w = di.screen.width;
                di[dk].h = di.screen.height;
                di[dk].j = di.innerHeight;
                di[dk].e = di.innerWidth;
                di[dk].l = di.location.href;
                di[dk].r = dj.referrer;
                di[dk].k = di.screen.colorDepth;
                di[dk].n = dj.characterSet;
                di[dk].o = (new Date).getTimezoneOffset();
                if (di.dataLayer)
                    for (const dw of Object.entries(Object.entries(dataLayer).reduce(((dx, dy) => ({
                            ...dx[1],
                            ...dy[1]
                        }))))) zaraz.set(dw[0], dw[1], {
                        scope: "page"
                    });
                di[dk].q = [];
                for (; di.zaraz.q.length;) {
                    const dz = di.zaraz.q.shift();
                    di[dk].q.push(dz)
                }
                dr.defer = !0;
                for (const dA of [localStorage, sessionStorage]) Object.keys(dA || {}).filter((dC => dC
                    .startsWith("_zaraz_"))).forEach((dB => {
                    try {
                        di[dk]["z_" + dB.slice(7)] = JSON.parse(dA.getItem(dB))
                    } catch {
                        di[dk]["z_" + dB.slice(7)] = dA.getItem(dB)
                    }
                }));
                dr.referrerPolicy = "origin";
                dr.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(di[dk])));
                dq.parentNode.insertBefore(dr, dq)
            };
            ["complete", "interactive"].includes(dj.readyState) ? zaraz.init() : di.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
</script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="{{ asset('asset2/submenu.js') }}"></script>
