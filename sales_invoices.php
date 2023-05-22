<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px]">
            <div class="flex justify-between items-center mb-[23px] flex-wrap md:flex-nowrap">
                <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold">Invoices</h2>
                            <a href="./sales_recurring.php" class=" w-full md:w-auto justify-center md:justify-start mt-[28px] md:mt-0 whitespace-nowrap montserrat flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Create New Invoice
                            </a>        
            </div>

            <div class="flex-wrap md:no-wrap flex mb-[34px]">
                <div class="mb-[20px] md:mb-0 md:mr-[20px] custom-select custom-select13">
                    <select id="countries" class="bg-white w-[100%] md:w-auto box-shadow select-custom outline-0 min-w-[337px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                    <option selected>All customers</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="mb-[20px] md:mb-0 md:mr-[20px] custom-select custom-select12">
                    <select id="countries" class="bg-white w-[100%] md:w-auto box-shadow select-custom outline-0 min-w-[174px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                    <option selected>All customers</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="w-full md:w-auto">
                    <div class="relative md:max-w-sm w-full md:w-auto">
                    <div class="absolute inset-y-0 right-[18px] flex items-center pl-3 pointer-events-none">
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.34982 12.4575C9.0501 12.4575 8.79866 12.3561 8.59548 12.1533C8.39229 11.9506 8.2907 11.6993 8.2907 11.3996C8.2907 11.0999 8.39207 10.8484 8.59482 10.6453C8.79758 10.4421 9.04883 10.3405 9.34855 10.3405C9.64827 10.3405 9.89971 10.4419 10.1029 10.6446C10.3061 10.8474 10.4077 11.0986 10.4077 11.3983C10.4077 11.6981 10.3063 11.9495 10.1036 12.1527C9.90079 12.3559 9.64954 12.4575 9.34982 12.4575ZM5.2625 12.4575C4.96278 12.4575 4.71134 12.3561 4.50816 12.1533C4.30497 11.9506 4.20338 11.6993 4.20338 11.3996C4.20338 11.0999 4.30475 10.8484 4.5075 10.6453C4.71026 10.4421 4.96151 10.3405 5.26123 10.3405C5.56095 10.3405 5.81239 10.4419 6.01557 10.6446C6.21876 10.8474 6.32035 11.0986 6.32035 11.3983C6.32035 11.6981 6.21898 11.9495 6.01623 12.1527C5.81347 12.3559 5.56222 12.4575 5.2625 12.4575ZM13.4371 12.4575C13.1431 12.4575 12.8931 12.3561 12.6871 12.1533C12.481 11.9506 12.378 11.6993 12.378 11.3996C12.378 11.0999 12.4808 10.8484 12.6864 10.6453C12.892 10.4421 13.1429 10.3405 13.4389 10.3405C13.735 10.3405 13.985 10.4419 14.189 10.6446C14.393 10.8474 14.495 11.0986 14.495 11.3983C14.495 11.6981 14.3936 11.9495 14.1909 12.1527C13.9881 12.3559 13.7369 12.4575 13.4371 12.4575ZM9.34982 16.5448C9.0501 16.5448 8.79866 16.442 8.59548 16.2364C8.39229 16.0308 8.2907 15.7799 8.2907 15.4839C8.2907 15.1878 8.39207 14.9378 8.59482 14.7338C8.79758 14.5298 9.04883 14.4278 9.34855 14.4278C9.64827 14.4278 9.89971 14.5292 10.1029 14.7319C10.3061 14.9347 10.4077 15.1859 10.4077 15.4857C10.4077 15.7797 10.3063 16.0297 10.1036 16.2357C9.90079 16.4418 9.64954 16.5448 9.34982 16.5448ZM5.2625 16.5448C4.96278 16.5448 4.71134 16.442 4.50816 16.2364C4.30497 16.0308 4.20338 15.7799 4.20338 15.4839C4.20338 15.1878 4.30475 14.9378 4.5075 14.7338C4.71026 14.5298 4.96151 14.4278 5.26123 14.4278C5.56095 14.4278 5.81239 14.5292 6.01557 14.7319C6.21876 14.9347 6.32035 15.1859 6.32035 15.4857C6.32035 15.7797 6.21898 16.0297 6.01623 16.2357C5.81347 16.4418 5.56222 16.5448 5.2625 16.5448ZM13.4371 16.5448C13.1431 16.5448 12.8931 16.442 12.6871 16.2364C12.481 16.0308 12.378 15.7799 12.378 15.4839C12.378 15.1878 12.4808 14.9378 12.6864 14.7338C12.892 14.5298 13.1429 14.4278 13.4389 14.4278C13.735 14.4278 13.985 14.5292 14.189 14.7319C14.393 14.9347 14.495 15.1859 14.495 15.4857C14.495 15.7797 14.3936 16.0297 14.1909 16.2357C13.9881 16.4418 13.7369 16.5448 13.4371 16.5448ZM1.74043 20.7482C1.27041 20.7482 0.862825 20.5756 0.517685 20.2305C0.172562 19.8853 0 19.4778 0 19.0077V3.27931C0 2.80762 0.172562 2.3986 0.517685 2.05227C0.862825 1.70592 1.27041 1.53275 1.74043 1.53275H3.34593V0H5.11025V1.53275H13.5881V0H15.3524V1.53275H16.9579C17.4296 1.53275 17.8386 1.70592 18.185 2.05227C18.5313 2.3986 18.7045 2.80762 18.7045 3.27931V19.0077C18.7045 19.4778 18.5313 19.8853 18.185 20.2305C17.8386 20.5756 17.4296 20.7482 16.9579 20.7482H1.74043ZM1.74043 19.0077H16.9579V8.07803H1.74043V19.0077Z" fill="#0D7AFF"/>
                        </svg>
                    </div>
                    <input value="01/01/2018 - 01/15/2018" type="text" name="daterange" class="bg-white w-full md:w-auto input-datepicker w-[100%] md:w-auto box-shadow outline-0 min-w-[337px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[18px]" placeholder="Select date">
                    </div>
                </div>
            </div>

                        <div class="mb-[35px] md:mb-[21px]">
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input id="bordered-radio-3" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-3" class="py-[7px] px-[12px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[12px] leadig-[18px] flex items-center mb-[20px] md:mb-0">Unpaid<span class="bg-[#0D7AFF] ml-[10px] w-[12px] h-[12px] rounded-full items-center flex justify-center text-[8px] font-bold leading-4 text-white">2</span></label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input checked id="bordered-radio-4" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-4" class="py-[7px] px-[12px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[12px] leadig-[18px] flex items-center mb-[20px] md:mb-0">Draft<span class="bg-[#0D7AFF] ml-[10px] w-[12px] h-[12px] rounded-full items-center flex justify-center text-[8px] font-bold leading-4 text-white">2</span></label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input checked id="bordered-radio-5" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-5" class="py-[7px] px-[12px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[12px] leadig-[18px] flex items-center mb-[20px] md:mb-0">All invoices<span class="bg-[#0D7AFF] ml-[10px] w-[12px] h-[12px] rounded-full items-center flex justify-center text-[8px] font-bold leading-4 text-white">2</span></label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px]">
                                <input checked id="bordered-radio-6" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-6" class="py-[7px] px-[12px] text-center rounded-[10px] bg-white hover:bg-[#408FEF1A] text-[#3E3E3E] text-[12px] leadig-[18px] flex items-center mb-[20px] md:mb-0">Recurring invoice<span class="bg-[#0D7AFF] ml-[10px] w-[12px] h-[12px] rounded-full items-center flex justify-center text-[8px] font-bold leading-4 text-white">2</span></label>
                            </div>
                        </div>

            <div class="grid grid-cols-7 gap-[15px] items-center py-[14px] pl-[17px] hidden md:grid bg-silver-light rounded-[10px]">
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] ml-[10px] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Status</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Date</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Number</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Customer</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">total</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">amount due</p>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Actions</p> 
                </div>
            </div>

            <div class="grid grid-cols-11 md:grid-cols-7 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#901740] montsserrat font-bold text-[10px] leading-[12px] px-[13px] py-[5px] bg-[#FFE7EF] rounded-[10px] inline-flex items-center justify-center">UNPAID</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20 Feb 2023</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">20 Feb 2023</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20230314323</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-2 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-11 md:grid-cols-7 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#901740] montsserrat font-bold text-[10px] leading-[12px] px-[13px] py-[5px] bg-[#FFE7EF] rounded-[10px] inline-flex items-center justify-center">UNPAID</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20 Feb 2023</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">20 Feb 2023</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20230314323</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-2 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-11 md:grid-cols-7 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#901740] montsserrat font-bold text-[10px] leading-[12px] px-[13px] py-[5px] bg-[#FFE7EF] rounded-[10px] inline-flex items-center justify-center">UNPAID</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20 Feb 2023</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">20 Feb 2023</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20230314323</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-2 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-11 md:grid-cols-7 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#901740] montsserrat font-bold text-[10px] leading-[12px] px-[13px] py-[5px] bg-[#FFE7EF] rounded-[10px] inline-flex items-center justify-center">UNPAID</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20 Feb 2023</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">20 Feb 2023</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20230314323</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-2 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-11 md:grid-cols-7 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#901740] montsserrat font-bold text-[10px] leading-[12px] px-[13px] py-[5px] bg-[#FFE7EF] rounded-[10px] inline-flex items-center justify-center">UNPAID</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20 Feb 2023</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">20 Feb 2023</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">20230314323</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold">Johnny</p>
                </div>
                <div class="col-span-6 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">N$ 8900.00</p>
                </div>
                <div class="col-span-2 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>