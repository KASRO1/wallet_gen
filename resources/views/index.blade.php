<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="/assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png"/>
    <title>Главная</title>
    <!--     Fonts and icons     -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
        rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js"
            crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Popper -->
    <script src="/jquery.min.js" defer></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5"
          rel="stylesheet"/>
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE"
            src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
<!-- sidenav  -->

<!-- end sidenav -->

<main
    class="ease-soft-in-out  relative h-full max-h-screen rounded-xl transition-all duration-200">

    <!-- end Navbar -->

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div
                class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal">Общий
                                        баланс кошелька</p>
                                    <h5 class="mb-0 font-bold">
                                        {{$balance}} BTC
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                    <i
                                        class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="w-full max-w-full px-3 mb-6 sm:w-1/6 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal">Всего
                                        кошельков</p>
                                    <h5 class="mb-0 font-bold">
                                        {{$wallets_count}}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                    <i
                                        class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/2">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal">Нынешний
                                        кошелек</p>
                                    <h6 class="mb-0 font-bold">
                                        {{$wallet_adress}}
                                    </h6>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                    <i
                                        class="ni leading-none ni-user-run text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- cards row 4 -->
        <div class="mt-4 max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
            <div
                class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div
                    class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                            <h6 class="mb-0">Отправить средства</h6>
                        </div>

                    </div>
                </div>
                <div class="flex-auto p-4">
                    <form id="withdraw_form" class="flex ">
                        @csrf
                        <div
                            class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">

                            <input type="text" name="address"
                                   class="pl-4 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                   placeholder="Введите адрес кошелька...">

                        </div>
                        <div
                            class="relative ml-2 flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">

                            <input type="text" name="amount"
                                   class="pl-4 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                   placeholder="Введите cумму перевода...">

                        </div>
                        <button type="submit"
                                class="ml-2 inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                                href="javascript:;">
                            Отправить </button>
                    </form>

                    <div id="status" class="mt-1">
                    <p class="text-xs">	КОМ. ПРИ ОТПРАВКЕ	- 0.0002. <br>
                        МИН. ДЕПОЗИТ - 0.0005 <br>
                        МИН. СУММА ВЫВОДА - 0.0001
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Транзакции</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Монета</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Сумма</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Статус</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Хеш транзакции</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">

                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-size-sm">{{$transaction['currency']}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 font-semibold leading-tight text-size-xs">{{$transaction['amount']." ". $transaction['currency']}}</p>
                                        </td>

                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            {{$transaction['status']}}
                                        </td><td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            {{$transaction['blockchain_hash']}}
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end cards -->
    <!-- Modal toggle -->

</main>
<div fixed-plugin>

    <!-- -right-90 in loc de 0-->
    <div fixed-plugin-card
         class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
        <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <div class="float-left">
                <h5 class="mt-4 mb-0">Soft UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-right mt-6">
                <button fixed-plugin-close-button
                        class="inline-block p-0 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr
            class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"/>
        <div class="flex-auto p-6 pt-0 sm:pt-4">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)">
                <div class="my-2 text-left" sidenav-colors>
              <span
                  class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-purple-700 to-pink-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                  active-color data-color-from="purple-700"
                  data-color-to="pink-500" onclick="sidebarColor(this)"></span>
                    <span
                        class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                        data-color-from="gray-900" data-color-to="slate-800"
                        onclick="sidebarColor(this)"></span>
                    <span
                        class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-blue-600 to-cyan-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                        data-color-from="blue-600" data-color-to="cyan-400"
                        onclick="sidebarColor(this)"></span>
                    <span
                        class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-green-600 to-lime-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                        data-color-from="green-600" data-color-to="lime-400"
                        onclick="sidebarColor(this)"></span>
                    <span
                        class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-500 to-yellow-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                        data-color-from="red-500" data-color-to="yellow-400"
                        onclick="sidebarColor(this)"></span>
                    <span
                        class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-600 to-rose-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                        data-color-from="red-600" data-color-to="rose-400"
                        onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-4">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm leading-normal">Choose between 2 different sidenav
                    types.</p>
            </div>
            <div class="flex">
                <button transparent-style-btn
                        class="inline-block w-full px-4 py-3 mb-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500"
                        data-class="bg-transparent" active-style>Transparent
                </button>
                <button white-style-btn
                        class="inline-block w-full px-4 py-3 mb-2 ml-2 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                        data-class="bg-white">White
                </button>
            </div>
            <p class="block mt-2 text-sm leading-normal xl:hidden">You can change
                the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="mt-4">
                <h6 class="mb-0">Navbar Fixed</h6>
            </div>
            <div class="min-h-6 mb-0.5 block pl-0">
                <input navbarFixed
                       class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                       type="checkbox"/>
            </div>
            <hr
                class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6"/>
            <a
                class="inline-block w-full px-6 py-3 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800"
                href="https://www.creative-tim.com/product/soft-ui-dashboard-tailwind"
                target="_blank">Free Download</a>
            <a
                class="inline-block w-full px-6 py-3 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none"
                href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
                target="_blank">View documentation</a>
            <div class="w-full text-center">
                <a class="github-button"
                   href="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind"
                   data-icon="octicon-star" data-size="large" data-show-count="true"
                   aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                <h6 class="mt-4">Thank you for sharing!</h6>
                <a
                    href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20Tailwind%20made%20by%20%40CreativeTim&hashtags=webdesign,dashboard,tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-tailwind"
                    class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                    target="_blank"> <i class="mr-1 fab fa-twitter"></i> Tweet </a>
                <a
                    href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-tailwind"
                    class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                    target="_blank"> <i class="mr-1 fab fa-facebook-square"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
</body>
<!-- plugin for charts  -->
<script src="/assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5"
        async></script>
<script src="/axios.min.js" defer></script>
<script>

    const withdraw_form = document.getElementById("withdraw_form");
    withdraw_form.addEventListener("submit", (e) => {
        e.preventDefault()
        const formData = new FormData(withdraw_form);
        axios.post('{{route("withdraw")}}', formData)
            .then((response) => {
                let errorsDiv = document.getElementById('status');
                errorsDiv.innerHTML = '';
                let errorParagraph = errorsDiv.createElement('p');
                errorParagraph.classList.add("text-green-500", "text-xs");
                errorParagraph.appendChild("Средства успешно отправлены");
                errorsDiv.appendChild(errorParagraph);
                setTimeout(() => {
                    window.location.reload();
                }, 2000);


            })
            .catch((error) => {
                if (error.response) {
                    let errorsDiv = document.getElementById('status');
                    errorsDiv.innerHTML = '';

                    for (let field in error.response.data.errors) {
                        let errorText = document.createTextNode(error.response.data.errors[field].join(', '));
                        let errorParagraph = document.createElement('p');
                        errorParagraph.classList.add("text-red-500", "text-xs");

                        errorParagraph.appendChild(errorText);
                        errorsDiv.appendChild(errorParagraph);
                    }
                } else {
                    console.error('Error:', error);
                }
            });
    })
</script>
</html>
