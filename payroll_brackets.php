<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold mb-[28px] ml-[16px] md:ml-0 mt-[1rem]">Tax Brackets</h2> 

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px]">

            <div class="grid grid-cols-12 gap-[15px] mb-[33px]">
                <div class="col-span-12 md:col-span-6">
                    <div class="rounded-[10px] px-[14px] py-[10px] bg-silver-light inline-block">
                        <p class="mb-[10px] text-[12px] leading-[18px] text-[#3E3E3E]">Company: <span class="font-semibold">Test Company</span></p>
                        <p class="mb-[0px] text-[12px] leading-[18px] text-[#3E3E3E]">Reg #: Test</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 md:text-right">
                    <div class="w-full md:w-auto">
                        <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                        <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Total Payrol YTD: </p>
                        <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                        </div>
                    </div>
                    <div class="w-full md:w-auto">
                        <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                        <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Income Payrol YTD: </p>
                        <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                        </div>
                    </div>
                    <div class="w-full md:w-auto">
                        <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                        <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Benefit Contributions YTD: </p>
                        <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

            <h3 class="text-[#003F6C] font-semibold text-[20px] leading-[30px] mb-[30px]">New Tax Bracket</h3>

            <div class="grid grid-cols-12 gap-[15px] mb-[33px] items-center">
                <div class="col-span-12 md:col-span-5">
                    <p class="mb-0 text-[#3E3E3E] text-[14px] leading-[21px]">Tax Bracket Label*</p>
                </div>
                <div class="col-span-12 md:col-span-7">
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/> 
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] mb-[33px] items-center">
                <div class="col-span-12 md:col-span-5">
                    <p class="mb-0 text-[#3E3E3E] text-[14px] leading-[21px]">Are the figures provided as monthly or annual figures?</p>
                </div>
                <div class="col-span-12 md:col-span-7">
                    <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[15px]">
                        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="bordered-radio-1" class="py-[7px] min-w-[126px] text-center rounded-[10px] bg-[#0D7AFF0D]">No</label>
                    </div>
                    <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px]">
                        <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="bordered-radio-2" class="py-[7px] min-w-[126px] text-center rounded-[10px] bg-[#0D7AFF0D]">Yes</label>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] mb-[33px] items-center">
                <div class="col-span-12 md:col-span-5">
                    <p class="mb-0 text-[#3E3E3E] text-[14px] leading-[21px]">Recipient of Funds:</p>
                </div>
                <div class="col-span-12 md:col-span-7 custom-select custom-select-full">
                    <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[45px]">
                    <option selected>All customers</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
            </div>

            <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

            <div class="grid grid-cols-12 gap-[15px] mb-[33px] items-center">
                <div class="col-span-12 md:col-span-5">
                    <p class="mb-0 text-[#3E3E3E] text-[14px] leading-[21px]">Is this tax applicable to everyone?</p>
                </div>
                <div class="col-span-12 md:col-span-7 custom-select custom-select2">
                    <select id="countries" class="bg-white w-[100%] md:w-auto box-shadow select-custom outline-0 min-w-[174px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[10px] h-[45px]">
                    <option selected>All customers</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] mb-[25px] items-center">
                <div class="col-span-12 md:col-span-5">
                    <p class="mb-0 text-[#3E3E3E] text-[14px] leading-[21px]">Define who this tax is applicable to</p>
                </div>
                <div class="col-span-12 md:col-span-7">
                    <div class="flex md:justify-between items-center flex-wrap md:flex-nowrap">

                        <span class="custom-select custom-select4 mb-[20px] md:mb-0">
                        <select id="countries" class="bg-white w-[100%] mb-[10px] md:mb-0 md:w-auto box-shadow select-custom outline-0 min-w-[174px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[10px] h-[45px]">
                        <option selected>All customers</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        </select>
                        </span>
                        
                        <span class="custom-select custom-select4 ml-auto md:ml-0 mb-[20px] md:mb-0">
                        <select id="countries" class="bg-white w-[100%] mb-[10px] md:mb-0 md:w-auto box-shadow select-custom outline-0 min-w-[174px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[10px] h-[45px]">
                        <option selected>All customers</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        </select>
                        </span>

                        <input class="mr-[20px] md:mr-0 min-w-[164px] md:max-w-[164px] rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0" placeholder="0"/>
                    
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"></path>
                                        </svg>
                                    </a>
                    
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] items-center">
                <div class="col-span-12 md:col-span-5">
                    
                </div>
                <div class="col-span-12 md:col-span-7">
                            <button href="" class="w-full whitespace-nowrap montserrat flex items-center justify-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Create New Invoice
                            </button>
                </div>
            </div>

            <hr class="bg-[#E4E4E4] mt-[35px] mb-[35px]"/>

            <div class="grid grid-cols-12 gap-[15px] mb-[35px] items-center">
                <div class="col-span-12 md:col-span-5">
                    <p class="mb-0 text-[#3E3E3E] text-[14px] leading-[21px]">Tax calculation:</p>
                </div>
                <div class="col-span-12 md:col-span-7">
                    <div class="flex justify-between items-center mb-[15px] flex-wrap">
                        <div><p class="text-[#3E3E3E] text-[12px] leading-[18px] mb-[10px] md:mb-0">You may use these variables:</p></div>
                        <div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[15px]">
                                <input id="bordered-radio-3" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-3" class="py-[7px] px-[5px] md:min-w-[126px] text-center rounded-[10px] bg-[#0D7AFF0D]">Taxable Income</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[15px]">
                                <input checked id="bordered-radio-4" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-4" class="py-[7px] px-[5px] md:min-w-[126px] text-center rounded-[10px] bg-[#0D7AFF0D]">Gross Income</label>
                            </div>
                            <div class="inline-flex items-center justify-center font-semibold text-[#3E3E3E] text-[12px] leading-[18px]">
                                <input checked id="bordered-radio-5" type="radio" value="" name="bordered-radio1" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-5" class="py-[7px] px-[5px] md:min-w-[126px] text-center rounded-[10px] bg-[#0D7AFF0D]">Net Income</label>
                            </div>
                        </div>
                    </div>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 mb-[15px]"/>
                    <p class="text-[#A9AFB5] text-[12px] leading-[18px] mb-0">Example: ##Taxable Income## / 100 * 12 + 5000</p> 
                </div>
            </div>

                <div class="text-right flex items-end justify-end">
                    <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow min-w-[180px] text-white rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>