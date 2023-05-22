<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[35px] lg:rounded-[40px] w-full lg:mr-[40px] overflow-hidden">

        <div class="flex justify-between mb-[41px] mt-[15px]">
            <div>
                <h2 class="text-[24px] leading-[29px] text-[#003F6C] font-semibold ml-[16px] md:ml-0">Profit % Loss</h2> 
            </div>
            <div>
                                <div class="flex justify-end md:justify-start">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.9062 5.76347V1.51497H6.09375V5.76347H4.6875V0.95509C4.6875 0.691617 4.77083 0.466567 4.9375 0.27994C5.10417 0.0933132 5.3125 0 5.5625 0H17.4062C17.6771 0 17.8958 0.0933132 18.0625 0.27994C18.2292 0.466567 18.3125 0.691617 18.3125 0.95509V5.76347H16.9062ZM1.40625 7.24551H21.5938H4.6875H1.40625ZM19.1875 10.4072C19.4583 10.4072 19.6979 10.3029 19.9062 10.0943C20.1146 9.88573 20.2188 9.62774 20.2188 9.32036C20.2188 9.03493 20.1146 8.78792 19.9062 8.57934C19.6979 8.37076 19.4583 8.26647 19.1875 8.26647C18.9167 8.26647 18.6823 8.37076 18.4844 8.57934C18.2865 8.78792 18.1875 9.03493 18.1875 9.32036C18.1875 9.62774 18.2865 9.88573 18.4844 10.0943C18.6823 10.3029 18.9167 10.4072 19.1875 10.4072ZM6.46875 20.518H16.5312C16.6354 20.518 16.724 20.4795 16.7969 20.4027C16.8698 20.3258 16.9062 20.2216 16.9062 20.0898V14.0958H6.09375V20.0898C6.09375 20.2216 6.13021 20.3258 6.20312 20.4027C6.27604 20.4795 6.36458 20.518 6.46875 20.518ZM6.46875 22C5.98958 22 5.57292 21.8134 5.21875 21.4401C4.86458 21.0669 4.6875 20.6168 4.6875 20.0898V16.3353H0.875C0.625 16.3353 0.416667 16.2475 0.25 16.0719C0.0833334 15.8962 0 15.6657 0 15.3802V8.69461C0 7.86028 0.265625 7.16317 0.796875 6.60329C1.32812 6.04341 1.98958 5.76347 2.78125 5.76347H20.2188C21.0104 5.76347 21.6719 6.04341 22.2031 6.60329C22.7344 7.16317 23 7.86028 23 8.69461V15.3802C23 15.6657 22.9167 15.8962 22.75 16.0719C22.5833 16.2475 22.375 16.3353 22.125 16.3353H18.3125V20.0898C18.3125 20.6168 18.1354 21.0669 17.7812 21.4401C17.4271 21.8134 17.0104 22 16.5312 22H6.46875ZM21.5938 14.8533V8.69461C21.5938 8.27744 21.4635 7.93164 21.2031 7.65719C20.9427 7.38273 20.6146 7.24551 20.2188 7.24551H2.78125C2.38542 7.24551 2.05729 7.38822 1.79688 7.67365C1.53646 7.95908 1.40625 8.2994 1.40625 8.69461V14.8533H4.6875V12.6138H18.3125V14.8533H21.5938Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                </div>
            </div>
        </div>

        <div class="bg-white p-[19px] md:p-[35px] rounded-[20px] mb-[35px]">
            <div class="flex flex-wrap md:flex-nowrap">
                <div class="grow">
                    <div class="flex items-center flex-wrap md:flex-nowrap">
                        <div class="grow custom-select custom-select custom-select5">
                            <select id="countries" class="bg-white select-silver min-h-[53px] w-full select-custom outline-0 montserrat font-semibold text-[10px] mb-[10px] md:mb-0 md:text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                            <option selected="">Paid & Unpaid (Including paid & unpaid invoices and bills)</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                            </select>
                        </div>
                        <div class="md:ml-[21px] w-full md:w-auto mt-[12px] md:mt-0">
                            <div>
                                <div class="relative md:max-w-sm">
                                <div class="absolute inset-y-0 left-[12px] flex items-center pointer-events-none">
                                    <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.34982 12.4575C9.0501 12.4575 8.79866 12.3561 8.59548 12.1533C8.39229 11.9506 8.2907 11.6993 8.2907 11.3996C8.2907 11.0999 8.39207 10.8484 8.59482 10.6453C8.79758 10.4421 9.04883 10.3405 9.34855 10.3405C9.64827 10.3405 9.89971 10.4419 10.1029 10.6446C10.3061 10.8474 10.4077 11.0986 10.4077 11.3983C10.4077 11.6981 10.3063 11.9495 10.1036 12.1527C9.90079 12.3559 9.64954 12.4575 9.34982 12.4575ZM5.2625 12.4575C4.96278 12.4575 4.71134 12.3561 4.50816 12.1533C4.30497 11.9506 4.20338 11.6993 4.20338 11.3996C4.20338 11.0999 4.30475 10.8484 4.5075 10.6453C4.71026 10.4421 4.96151 10.3405 5.26123 10.3405C5.56095 10.3405 5.81239 10.4419 6.01557 10.6446C6.21876 10.8474 6.32035 11.0986 6.32035 11.3983C6.32035 11.6981 6.21898 11.9495 6.01623 12.1527C5.81347 12.3559 5.56222 12.4575 5.2625 12.4575ZM13.4371 12.4575C13.1431 12.4575 12.8931 12.3561 12.6871 12.1533C12.481 11.9506 12.378 11.6993 12.378 11.3996C12.378 11.0999 12.4808 10.8484 12.6864 10.6453C12.892 10.4421 13.1429 10.3405 13.4389 10.3405C13.735 10.3405 13.985 10.4419 14.189 10.6446C14.393 10.8474 14.495 11.0986 14.495 11.3983C14.495 11.6981 14.3936 11.9495 14.1909 12.1527C13.9881 12.3559 13.7369 12.4575 13.4371 12.4575ZM9.34982 16.5448C9.0501 16.5448 8.79866 16.442 8.59548 16.2364C8.39229 16.0308 8.2907 15.7799 8.2907 15.4839C8.2907 15.1878 8.39207 14.9378 8.59482 14.7338C8.79758 14.5298 9.04883 14.4278 9.34855 14.4278C9.64827 14.4278 9.89971 14.5292 10.1029 14.7319C10.3061 14.9347 10.4077 15.1859 10.4077 15.4857C10.4077 15.7797 10.3063 16.0297 10.1036 16.2357C9.90079 16.4418 9.64954 16.5448 9.34982 16.5448ZM5.2625 16.5448C4.96278 16.5448 4.71134 16.442 4.50816 16.2364C4.30497 16.0308 4.20338 15.7799 4.20338 15.4839C4.20338 15.1878 4.30475 14.9378 4.5075 14.7338C4.71026 14.5298 4.96151 14.4278 5.26123 14.4278C5.56095 14.4278 5.81239 14.5292 6.01557 14.7319C6.21876 14.9347 6.32035 15.1859 6.32035 15.4857C6.32035 15.7797 6.21898 16.0297 6.01623 16.2357C5.81347 16.4418 5.56222 16.5448 5.2625 16.5448ZM13.4371 16.5448C13.1431 16.5448 12.8931 16.442 12.6871 16.2364C12.481 16.0308 12.378 15.7799 12.378 15.4839C12.378 15.1878 12.4808 14.9378 12.6864 14.7338C12.892 14.5298 13.1429 14.4278 13.4389 14.4278C13.735 14.4278 13.985 14.5292 14.189 14.7319C14.393 14.9347 14.495 15.1859 14.495 15.4857C14.495 15.7797 14.3936 16.0297 14.1909 16.2357C13.9881 16.4418 13.7369 16.5448 13.4371 16.5448ZM1.74043 20.7482C1.27041 20.7482 0.862825 20.5756 0.517685 20.2305C0.172562 19.8853 0 19.4778 0 19.0077V3.27931C0 2.80762 0.172562 2.3986 0.517685 2.05227C0.862825 1.70592 1.27041 1.53275 1.74043 1.53275H3.34593V0H5.11025V1.53275H13.5881V0H15.3524V1.53275H16.9579C17.4296 1.53275 17.8386 1.70592 18.185 2.05227C18.5313 2.3986 18.7045 2.80762 18.7045 3.27931V19.0077C18.7045 19.4778 18.5313 19.8853 18.185 20.2305C17.8386 20.5756 17.4296 20.7482 16.9579 20.7482H1.74043ZM1.74043 19.0077H16.9579V8.07803H1.74043V19.0077Z" fill="#0D7AFF"></path>
                                    </svg>
                                </div>
                                <input value="01/01/2018 - 01/15/2018" type="text" name="daterange" class="bg-white w-full md:w-auto input-datepicker input-datepicker-right outline-0 md:min-w-[272px] border border-[#D9D9D9] pl-[38px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[18px]" placeholder="Select date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right flex items-end justify-end mt-[20px] md:mt-0 w-full md:w-auto">
                    <button class="bg-[#003F6C] w-full md:w-auto hover:bg-[#002743] box-shadow min-w-[180px] text-white rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px] md:ml-[118px]">Show report</button>
                </div>
            </div>
        </div>

        <div class="bg-white p-[19px] md:p-[35px] rounded-[20px] mb-[35px]">

            <div class="flex items-end justify-between md:justify-start mb-[46px]">
                <div>
                    <p class="inline-block mb-[15px] text-[#3E3E3E] text-[16px] leading-[24px]">Income</p><br/>
                    <p class="inline-block montserrat font-semibold text-[22px] md:text-[32px] leading-[39px] text-[#3E3E3E]">N$ 0.00</p>
                </div>
                <div>
                    <p class="font-semibold text-[32px] leading-[39px] mx-[10px] md:mx-[66px]">-</p>
                </div>
                <div>
                    <p class="inline-block mb-[15px] text-[#3E3E3E] text-[16px] leading-[24px]">Expense</p><br/>
                    <p class="inline-block montserrat font-semibold text-[22px] md:text-[32px] leading-[39px] text-[#3E3E3E]">N$ 0.00</p>
                </div>
                <div>
                    <p class="font-semibold text-[32px] leading-[39px] mx-[10px] md:mx-[66px]">=</p>
                </div>
                <div>
                    <p class="inline-block mb-[15px] text-[#3E3E3E] text-[16px] leading-[24px] font-semibold">Net Profit</p><br/>
                    <p class="inline-block montserrat font-semibold text-[22px] md:text-[32px] leading-[39px] text-[#0D7AFF]">N$ 0.00</p>
                </div>
            </div>

            <div class="flex justify-between flex-wrap md:flex-nowrap items-center mb-[17px]">
                <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px] w-full md:w-auto mb-[10px] md:mb-0">Profit & Loss Reports</p>
                <p class="text-[12px] font-semibold leading-[18px] text-[#A9AFB5] px-[14px] py-[4px] bg-[#F5F5F5] rounded-[20px]">2023-01-01 - 2023-01-23</p>
            </div>

            <hr class="border-[#E4E4E4] mb-[20px]"/>

            <div class="flex justify-between mb-[24px]">
                <p class="text-[14px] leading-[21px] text-[#3E3E3E]">Income</p>
                <p class="text-[14px] leading-[21px] text-[#3E3E3E]">NAD 0.00</p>
            </div>

            <div class="flex justify-between mb-[16px]">
                <p class="text-[14px] leading-[21px] text-[#3E3E3E]">Expense</p>
                <p class="text-[14px] leading-[21px] text-[#3E3E3E]">NAD 0.00</p>
            </div>

            <hr class="border-[#003F6C] mb-[20px]"/>

            <div class="flex justify-between">
                <p class="text-[14px] leading-[21px] text-[#3E3E3E] font-semibold">Net Profit</p>
                <p class="text-[14px] leading-[21px] text-[#3E3E3E] font-semibold">NAD 0.00</p>
            </div>

        </div>

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px] mb-[36px]">

            <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold mb-[25px] flex items-center"><img class="inline mr-[14px]" src="./img/icon-arrow-top.svg"/>Income Summary</h2> 

            <div class="flex justify-between items-center mb-[30px] flex-wrap md:flex-nowrap">
                        <div class="">
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input id="bordered-radio-3" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-3" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Copy</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input checked id="bordered-radio-4" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-4" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Excel</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input checked id="bordered-radio-5" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-5" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">PDF</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px]">
                                <input checked id="bordered-radio-6" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-6" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Print</label>
                            </div>
                        </div>  
                        
                        <div class="w-full md:w-auto">
                            <form class="bg-white w-full md:w-auto py-[11px] px-[17px] flex items-center overflow-hidden rounded-[10px] md:min-w-[268px]">
                                <input placeholder="Search..." class="placeholder:text-[#A9AFB5] color-black text-[16px] leading-[24px] outline-0 flex-grow pr-[10px]">
                                <button><img src="./img/icon-search-blue.svg"></button>
                            </form>
                        </div>
            </div>



    <div class='overflow-x-scroll md:overflow-x-hidden overflow-y-hidden reports-table'>
        <table class='table-auto  w-full'>
            <thead>
                <tr class=''>
                    <th class='py-2 pr-[3rem]'><p class="bg-silver-light rounded-[10px] px-[15px] mb-0 py-[10px] text-[#A9AFB5] font-semibold text-[10px] leading-[15px] tracking-[1px]">Category</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">January</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">February</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">March</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">April</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">May</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">June</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">July</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">August</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">September</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">October</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">November</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">December</p></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">Income Invoice</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                </tr>
                <tr>
                    <td><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">Income Revenue</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                </tr>
                <tr>
                    <td><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">Total Income</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                </tr>
            </tbody>
        </table>
    </div>

            <div class="flex justify-between">
                    <button class="control-btn md:hidden">
                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_197_137)">
                        <path d="M4.92308 7.93341L7.57066 10.559C8.14311 11.1124 8.14311 12.0207 7.57066 12.5742C7.01252 13.1419 6.0966 13.1419 5.53846 12.5742L0.429338 7.50764C-0.128801 6.95415 -0.128801 6.04585 0.429338 5.47817L5.53846 0.411572C5.82469 0.127729 6.18247 -0.0141926 6.55456 -0.0141926C6.92665 -0.0141926 7.29875 0.127729 7.57066 0.411572C8.1288 0.965065 8.1288 1.87336 7.57066 2.44105L4.92308 5.06659L3.50626 6.5L4.92308 7.93341Z" fill="#C4C4C4"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_197_137">
                        <rect width="8" height="13" fill="white" transform="matrix(-1 0 0 -1 8 13)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </button>
                <div>
                    <p class="mb-0 text-[12px] leading-[18px] text-[#A9AFB5]">1-4 of 4</p>
                </div>
                <div>
                    <button class="mr-[29px] control-btn hidden md:inline-block">
                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_197_137)">
                        <path d="M4.92308 7.93341L7.57066 10.559C8.14311 11.1124 8.14311 12.0207 7.57066 12.5742C7.01252 13.1419 6.0966 13.1419 5.53846 12.5742L0.429338 7.50764C-0.128801 6.95415 -0.128801 6.04585 0.429338 5.47817L5.53846 0.411572C5.82469 0.127729 6.18247 -0.0141926 6.55456 -0.0141926C6.92665 -0.0141926 7.29875 0.127729 7.57066 0.411572C8.1288 0.965065 8.1288 1.87336 7.57066 2.44105L4.92308 5.06659L3.50626 6.5L4.92308 7.93341Z" fill="#C4C4C4"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_197_137">
                        <rect width="8" height="13" fill="white" transform="matrix(-1 0 0 -1 8 13)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </button>
                    <button class="control-btn">
                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.07692 5.06659L0.429338 2.44105C-0.143113 1.88755 -0.143113 0.979258 0.429338 0.425764C0.987478 -0.141921 1.9034 -0.141921 2.46154 0.425764L7.57066 5.49236C8.1288 6.04585 8.1288 6.95415 7.57066 7.52183L2.46154 12.5884C2.17531 12.8723 1.81753 13.0142 1.44544 13.0142C1.07335 13.0142 0.701252 12.8723 0.429338 12.5884C-0.128801 12.0349 -0.128801 11.1266 0.429338 10.559L3.07692 7.93341L4.49374 6.5L3.07692 5.06659Z" fill="#0D7AFF"/>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px]">

            <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold mb-[25px] flex items-center"><img class="inline mr-[14px]" src="./img/icon-arrow3-down.svg"/>Expense Summary</h2> 

            <div class="flex justify-between items-center mb-[30px] flex-wrap md:flex-nowrap">
                        <div class="">
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input id="bordered-radio-7" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-7" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Copy</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input checked id="bordered-radio-8" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-8" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Excel</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input checked id="bordered-radio-9" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-9" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">PDF</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px]">
                                <input checked id="bordered-radio-10" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-10" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Print</label>
                            </div>
                        </div>  
                        
                        <div class="w-full md:w-auto">
                            <form class="bg-white w-full md:w-auto py-[11px] px-[17px] flex items-center overflow-hidden rounded-[10px] md:min-w-[268px]">
                                <input placeholder="Search..." class="placeholder:text-[#A9AFB5] color-black text-[16px] leading-[24px] outline-0 flex-grow pr-[10px]">
                                <button><img src="./img/icon-search-blue.svg"></button>
                            </form>
                        </div>
            </div>


    <div class='overflow-x-scroll md:overflow-x-hidden overflow-y-hidden reports-table'>
        <table class='table-auto  w-full'>
            <thead>
                <tr class=''>
                    <th class='py-2 pr-[3rem]'><p class="bg-silver-light rounded-[10px] px-[15px] mb-0 py-[10px] text-[#A9AFB5] font-semibold text-[10px] leading-[15px] tracking-[1px]">Expense</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">January</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">February</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">March</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">April</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">May</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">June</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">July</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">August</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">September</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">October</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">November</p></th>
                    <th class='px-3 py-2 text-center'><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">December</p></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">Expense Bills</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                </tr>
                <tr>
                    <td><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">Total Bills</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px]">0</p></td>
                </tr>
                <tr>
                    <td><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">Total Income</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                    <td class="text-center"><p class="text-[#3E3E3E] md:text-[12px] xl:text-[14px] leading-[21px] font-semibold">0</p></td>
                </tr>
            </tbody>
        </table>
    </div>

            <div class="flex justify-between">
                    <button class="control-btn md:hidden">
                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_197_137)">
                        <path d="M4.92308 7.93341L7.57066 10.559C8.14311 11.1124 8.14311 12.0207 7.57066 12.5742C7.01252 13.1419 6.0966 13.1419 5.53846 12.5742L0.429338 7.50764C-0.128801 6.95415 -0.128801 6.04585 0.429338 5.47817L5.53846 0.411572C5.82469 0.127729 6.18247 -0.0141926 6.55456 -0.0141926C6.92665 -0.0141926 7.29875 0.127729 7.57066 0.411572C8.1288 0.965065 8.1288 1.87336 7.57066 2.44105L4.92308 5.06659L3.50626 6.5L4.92308 7.93341Z" fill="#C4C4C4"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_197_137">
                        <rect width="8" height="13" fill="white" transform="matrix(-1 0 0 -1 8 13)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </button>
                <div>
                    <p class="mb-0 text-[12px] leading-[18px] text-[#A9AFB5]">1-4 of 4</p>
                </div>
                <div>
                    <button class="mr-[29px] control-btn hidden md:inline-block">
                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_197_137)">
                        <path d="M4.92308 7.93341L7.57066 10.559C8.14311 11.1124 8.14311 12.0207 7.57066 12.5742C7.01252 13.1419 6.0966 13.1419 5.53846 12.5742L0.429338 7.50764C-0.128801 6.95415 -0.128801 6.04585 0.429338 5.47817L5.53846 0.411572C5.82469 0.127729 6.18247 -0.0141926 6.55456 -0.0141926C6.92665 -0.0141926 7.29875 0.127729 7.57066 0.411572C8.1288 0.965065 8.1288 1.87336 7.57066 2.44105L4.92308 5.06659L3.50626 6.5L4.92308 7.93341Z" fill="#C4C4C4"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_197_137">
                        <rect width="8" height="13" fill="white" transform="matrix(-1 0 0 -1 8 13)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </button>
                    <button class="control-btn">
                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.07692 5.06659L0.429338 2.44105C-0.143113 1.88755 -0.143113 0.979258 0.429338 0.425764C0.987478 -0.141921 1.9034 -0.141921 2.46154 0.425764L7.57066 5.49236C8.1288 6.04585 8.1288 6.95415 7.57066 7.52183L2.46154 12.5884C2.17531 12.8723 1.81753 13.0142 1.44544 13.0142C1.07335 13.0142 0.701252 12.8723 0.429338 12.5884C-0.128801 12.0349 -0.128801 11.1266 0.429338 10.559L3.07692 7.93341L4.49374 6.5L3.07692 5.06659Z" fill="#0D7AFF"/>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>