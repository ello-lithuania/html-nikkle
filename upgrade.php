<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <div class="bg-white p-[19px] md:p-[35px] rounded-[20px] mb-[35px]">
            <div class="grid grid-cols-12 gap-[15px]">
                <div class="col-span-12 md:col-span-6">
                    <p class="text-[14px] leading-[17px] text-[#3E3E3E] montserrat mb-[10px]">Your subscription: <span class="text-[#003F6C] font-semibold">Standart</span></p>
                    <p class="text-[14px] leading-[17px] text-[#3E3E3E] montserrat mb-[10px]">Pricing: <span class="text-[#003F6C] font-semibold">20.00 USD</span></p>
                    <p class="text-[14px] leading-[17px] text-[#3E3E3E] montserrat mb-[10px]">Billing Frequency : <span class="text-[#003F6C] font-semibold">Monthly</span></p>
                    <p class="text-[14px] leading-[17px] text-[#3E3E3E] montserrat mb-[10px]">Last Billing : <span class="text-[#003F6C] font-semibold">09 Feb 2023</span></p>
                    <p class="text-[14px] leading-[17px] text-[#3E3E3E] montserrat">Next Billing : <span class="text-[#003F6C] font-semibold">09 Mar 2023</span> <span class="text-[#FF6262]">(17 days left)</span></p></p>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <div class="flex flex-col">
                        <div class="flex md:justify-end">
                            <a href="" class="mb-[47px] mt-[20px] md:mt-0 md:mb-[23px] px-[17px] py-[5px] border border-[#D9D9D9] rounded-[10px] flex items-center montserrat text-[#0D7AFF] font-semibold text-[12px] leading-[15px]"><img class="inline mr-[11.37px]" src="./img/icon-invoice.svg"/>View Invoices</a>
                        </div>
                        <div>
                            <p class="text-[#A9AFB5] text-[10px] leading-[15px] mb-[13px] uppercase hidden md:block">Coupon code</p>
                            <div class="flex justify-between">
                                <form class="w-full flex flex-wrap md:flex-nowrap">
                                    <input class="grow w-full md:w-auto mb-[20px] md:mb-0 rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0">
                                    <button type="submit" class="w-full md:w-auto md:ml-[25px] px-[24px] py-[16px] bg-[#0D7AFF] rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] text-[#EBF4F8]">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-[#54BE5F] font-semibold text-[12px] leading-[18px] w-full text-center py-[12px] bg-green-light rounded-[10px] mt-[23px]">Payment status: Verified</p>

        </div>

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px]">

                        <div class="mb-[29px] md:mb-0">
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input id="bordered-radio-3" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                                <label for="bordered-radio-3" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Monthly</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[20px]">
                                <input checked="" id="bordered-radio-4" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-4" class="py-[7px] px-[26px] text-center rounded-[10px] bg-white text-[#3E3E3E] text-[14px] leadig-[21px] flex items-center mb-[10px] md:mb-0">Yearly</label>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4">

                            </div>
                            <div class="col-span-2 text-center pb-[25px]">
                                <p class="mb-[23px] text-[#003F6C] montserrat text-[16px] font-semibold leading-[19.5px] text-center">Free</p>
                                <p class="text-[#3E3E3E] montserrat text-[18px] md:text-[24px] leading-[29.26px] font-semibold text-center mb-[40px] md:mb-[23px]">N$ 0</p>
                                <a href="" class="bg-[#003F6C] rounded-[10px] text-[#EBF4F8] montserrat font-semibold text-[14px] leading-[17px] md:px-[37px] py-[16.5px] inline-block min-w-[90%] md:min-w-[180px] max-w-[90%]">Upgrade</a>
                            </div>
                            <div class="col-span-2 text-center pb-[25px]  rounded-t-[20px] bg-[#EBF4F880]/50">
                                <p class="bg-[#408FEF1A]/10 px-[10px] md:px-[20px] py-[6px] rounded-[10px] md:rounded-[20px] max-w-[90%] md:min-w-[180px] inline-block text-center text-[#0D7AFF] font-semibold text-[8px] md:text-[10px] leading-[12px] md:leading-[15px] mb-[19px] md:mb-[23.5px] mt-[9px] md:mt-[24.5px] uppercase md:normal-case">Most popular<span class="hidden md:inline"> plan</span></p>
                                <p class="mb-[23px] text-[#003F6C] montserrat text-[16px] font-semibold leading-[19.5px] text-center">Standard</p>
                                <p class="text-[#3E3E3E] montserrat text-[18px] md:text-[24px] leading-[29.26px] font-semibold text-center mb-[23px]">N$ 94.05 <span class="block md:inline-block text-[14px] leading-[17px] text-[#A9AFB5]">/ mth</span></p>
                                <a href="" class="bg-[#003F6C] rounded-[10px] text-[#EBF4F8] montserrat font-semibold text-[14px] leading-[17px] md:px-[37px] py-[16.5px] inline-block min-w-[90%] md:min-w-[180px] max-w-[90%]">Upgrade</a>
                            </div>
                            <div class="col-span-2 text-center pb-[25px]">
                                <p class="mb-[23px] text-[#003F6C] montserrat text-[16px] font-semibold leading-[19.5px] text-center">Premium</p>
                                <p class="text-[#3E3E3E] montserrat text-[18px] md:text-[24px] leading-[29.26px] font-semibold text-center mb-[23px]">N$ 189.05 <span class="block md:inline-block text-[14px] leading-[17px] text-[#A9AFB5]">/ mth</span></p>
                                <a href="" class="bg-[#003F6C] rounded-[10px] text-[#EBF4F8] montserrat font-semiboldtext-[14px] leading-[17px] md:px-[37px] py-[16.5px] inline-block min-w-[90%] md:min-w-[180px] max-w-[90%]">Upgrade</a>
                            </div>
                        </div>


            <hr class="border-[#003F6C]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[25px] pb-[10px]">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Invoices</p>
                            </div>
                            <div class="col-span-2 text-center pt-[25px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[25px] pb-[10px] bg-[#EBF4F880]/50">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px] ">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[25px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                        </div>

            <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Estimates</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px] ">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Customers</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px] ">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Business</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">1</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px] ">5</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px]">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Invoice templates</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px] ">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Get Invoice Payment Online</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Multi User Roles</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">1</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px] ">3</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Products & Services</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Expenses</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px] ">Unlimited</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">Unlimited</p>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Categories</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Tax</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Profit & Loss Report</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Sales Tax Report</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Income by Customer Report</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Purchases by Vendor Report</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">General Reports</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Transaction Reports</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                                
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Income Summary</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Expense Summary</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Invoice Summary</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Income vs Expense Report</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Product Stock Report</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Refer and Earn</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Referral Rewards</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Withdrawal Requests</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Roles</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[10px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Assign Permissions</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] bg-[#EBF4F880]/50 table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[10px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

                        <hr class="border-[#D9D9D9]"/>

                        <div class="grid grid-cols-8 md:grid-cols-10 items-end">
                            <div class="col-span-2 md:col-span-4 pt-[10px] pb-[22px] table-middle-heading">
                                <p class="text-[#3E3E3E] font-semibold text-[12px] leading-[18px]">Staff</p>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[22px] table-middle">
                                <p class="text-[#3E3E3E] text-[12px] leading-[18px]">-</p> 
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[22px] bg-[#EBF4F880]/50 table-middle rounded-b-[20px]">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                            <div class="col-span-2 text-center pt-[10px] pb-[22px] table-middle">
                                <img class="inline-block" src="./img/icon-check.svg"/>
                            </div>
                        </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>