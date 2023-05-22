<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px] relative h-screen">

                            <a href="" class="popup-btn whitespace-nowrap montserrat inline-flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add New Customer
                            </a>        

                            <a href="" class="popup-btn2 whitespace-nowrap montserrat inline-flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add New Customer2
                            </a>    

<div class="popup-btn-body2 absolute top-0 bottom-0 left-0 right-0 hidden">
    <div class="flex items-center justify-center h-screen w-11/12 md:w-6/12 m-auto">
    <div class="bg-white rounded-[20px] box-shadow2 px-[16px] md:px-[32px] pt-[32px] pb-[30px] relative popup-body-style">
        <button class="popup-close2 absolute top-[24.4px] right-[22.4px]">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.31856 15.6152L0.385254 14.6819L7.06667 8.00046L0.385254 1.31905L1.31856 0.385742L7.99997 7.06715L14.6814 0.385742L15.6147 1.31905L8.93328 8.00046L15.6147 14.6819L14.6814 15.6152L7.99997 8.93376L1.31856 15.6152Z" fill="#003F6C"/>
            </svg>
        </button>

        <h2 class="text-[24px] font-semibold leading-[36px] mb-[25px] text-[#003F6C]">Add new customer</h2>

                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Customer name*</label>
                <input class="mb-[20px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0">
                
                <div class="mb-[20px]">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country</label>
                    <div class="md:mb-0 custom-select custom-select7">
                        <select id="countries" class="bg-white md:w-auto box-shadow select-custom outline-0 min-w-[337px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>

                <div class="mb-[40px]">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Currency</label>
                    <div class="md:mb-0 custom-select custom-select7">
                        <select id="countries" class="bg-white md:w-auto box-shadow select-custom outline-0 min-w-[337px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                        <option selected>Palauan dollar</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>

                <div class="text-right flex items-end justify-end mt-[41px]">
                    <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Add Customer </button>
                </div>
    </div>
    </div>
</div>


    </div>
</div>



<div class="popup-btn-body fixed top-0 bottom-0 left-0 right-0 hidden bg-gradient-white">
    <div class="flex items-center justify-center h-screen w-11/12 md:w-6/12 m-auto">
    <div class="bg-white rounded-[20px] box-shadow2 px-[16px] md:px-[36px] pt-[49px] pb-[30px] relative">
        <button class="popup-close absolute top-[15px] right-[15px]">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.77819 5.95487L8.07893 9.25562L9.25559 8.07896L5.95485 4.77821L9.25561 1.47746L8.07892 0.300766L4.77816 3.60152L1.47742 0.300781L0.300756 1.47744L3.6015 4.77818L0.300742 8.07894L1.47743 9.25563L4.77819 5.95487Z" fill="#A9AFB5"/>
            </svg>
        </button>
        <div class="grid grid-cols-12 gap-[20px] items-center">
            <div class="col-span-6 md:col-span-6">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Date</label>
                            <div>
                                <div class="relative md:max-w-sm">
                                <div class="absolute inset-y-0 left-[12px] flex items-center pointer-events-none">
                                    <svg class="mr-[13px]" width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.60509 16.535C1.24094 16.535 0.925162 16.4013 0.657763 16.1339C0.390378 15.8665 0.256685 15.5507 0.256685 15.1866V3.00092C0.256685 2.63548 0.390378 2.31859 0.657763 2.05027C0.925162 1.78193 1.24094 1.64777 1.60509 1.64777H2.84896V0.460266H4.21587V1.64777H10.7841V0.460266H12.151V1.64777H13.3949C13.7604 1.64777 14.0772 1.78193 14.3456 2.05027C14.6139 2.31859 14.7481 2.63548 14.7481 3.00092V15.1866C14.7481 15.5507 14.6139 15.8665 14.3456 16.1339C14.0772 16.4013 13.7604 16.535 13.3949 16.535H1.60509ZM1.60509 15.1866H13.3949V6.71875H1.60509V15.1866ZM1.60509 5.53125H13.3949V3.00092H1.60509V5.53125ZM7.50049 10.1117C7.26829 10.1117 7.07348 10.0332 6.91607 9.87611C6.75864 9.71902 6.67993 9.52437 6.67993 9.29216C6.67993 9.05995 6.75847 8.86514 6.91555 8.70773C7.07264 8.55031 7.2673 8.4716 7.49951 8.4716C7.73171 8.4716 7.92652 8.55014 8.08393 8.70722C8.24136 8.86431 8.32007 9.05896 8.32007 9.29117C8.32007 9.52338 8.24153 9.71819 8.08445 9.8756C7.92735 10.033 7.7327 10.1117 7.50049 10.1117ZM4.33383 10.1117C4.10162 10.1117 3.90681 10.0332 3.7494 9.87611C3.59198 9.71902 3.51327 9.52437 3.51327 9.29216C3.51327 9.05995 3.59181 8.86514 3.74889 8.70773C3.90598 8.55031 4.10063 8.4716 4.33284 8.4716C4.56505 8.4716 4.75986 8.55014 4.91727 8.70722C5.07469 8.86431 5.1534 9.05896 5.1534 9.29117C5.1534 9.52338 5.07486 9.71819 4.91778 9.8756C4.76069 10.033 4.56604 10.1117 4.33383 10.1117ZM10.6672 10.1117C10.4394 10.1117 10.2457 10.0332 10.086 9.87611C9.92641 9.71902 9.8466 9.52437 9.8466 9.29216C9.8466 9.05995 9.92625 8.86514 10.0855 8.70773C10.2448 8.55031 10.4392 8.4716 10.6685 8.4716C10.8979 8.4716 11.0916 8.55014 11.2497 8.70722C11.4077 8.86431 11.4867 9.05896 11.4867 9.29117C11.4867 9.52338 11.4082 9.71819 11.2511 9.8756C11.094 10.033 10.8994 10.1117 10.6672 10.1117ZM7.50049 13.2784C7.26829 13.2784 7.07348 13.1988 6.91607 13.0395C6.75864 12.8802 6.67993 12.6858 6.67993 12.4565C6.67993 12.2271 6.75847 12.0334 6.91555 11.8753C7.07264 11.7173 7.2673 11.6383 7.49951 11.6383C7.73171 11.6383 7.92652 11.7168 8.08393 11.8739C8.24136 12.031 8.32007 12.2256 8.32007 12.4578C8.32007 12.6856 8.24153 12.8793 8.08445 13.039C7.92735 13.1986 7.7327 13.2784 7.50049 13.2784ZM4.33383 13.2784C4.10162 13.2784 3.90681 13.1988 3.7494 13.0395C3.59198 12.8802 3.51327 12.6858 3.51327 12.4565C3.51327 12.2271 3.59181 12.0334 3.74889 11.8753C3.90598 11.7173 4.10063 11.6383 4.33284 11.6383C4.56505 11.6383 4.75986 11.7168 4.91727 11.8739C5.07469 12.031 5.1534 12.2256 5.1534 12.4578C5.1534 12.6856 5.07486 12.8793 4.91778 13.039C4.76069 13.1986 4.56604 13.2784 4.33383 13.2784ZM10.6672 13.2784C10.4394 13.2784 10.2457 13.1988 10.086 13.0395C9.92641 12.8802 9.8466 12.6858 9.8466 12.4565C9.8466 12.2271 9.92625 12.0334 10.0855 11.8753C10.2448 11.7173 10.4392 11.6383 10.6685 11.6383C10.8979 11.6383 11.0916 11.7168 11.2497 11.8739C11.4077 12.031 11.4867 12.2256 11.4867 12.4578C11.4867 12.6856 11.4082 12.8793 11.2511 13.039C11.094 13.1986 10.8994 13.2784 10.6672 13.2784Z" fill="#0D7AFF"></path>
                                    </svg>
                                </div>
                                <input value="01/01/2018" type="text" name="daterange" class="input-datepicker-normal input-datepicker-right w-full rounded-[10px] min-h-[49.2px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 pl-[40px] text-[14px] leading-[17px]" placeholder="Select date">
                                </div>
                            </div>
            </div>
            <div class="col-span-6 md:col-span-6">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Amount</label>
                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0">
            </div>
            <div class="col-span-6 md:col-span-6">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Client</label>
                <div class="mb-[20px] md:mb-0 custom-select custom-select7">
                    <select id="countries" class="bg-white md:w-auto box-shadow select-custom outline-0 min-w-[337px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                    <option selected>All customers</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
            </div>
            <div class="col-span-6 md:col-span-6 md:h-[100%] flex flex-col justify-between">
                <label class="mb-[15px] text-[#A9AFB5] text-[12px] leading-[18px]">Category</label>
                        <div class="">
                            <div class="inline-flex items-center justify-center text-[#3E3E3E] text-[12px] leading-[18px] mr-[5px] md:mr-[15px]">
                                <input id="bordered-radio-3" type="radio" value="" name="bordered-radio1" class="radio-white-type hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-3" class="py-[5px] px-[6px] md:px-[16px] text-center rounded-[30px] bg-[#F2F5F8] hover:bg-[#408FEF1A] text-[#3E3E3E] text-[12px] md:text-[14px] leading-[18px] md:leading-[21px] flex items-center mb-[10px] md:mb-[10px]">Category 1</label>
                            </div>
                            <div class="inline-flex items-center justify-center text-[#3E3E3E] text-[12px] leading-[18px]">
                                <input checked="" id="bordered-radio-4" type="radio" value="" name="bordered-radio1" class="radio-white-type hidden w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 ">
                                <label for="bordered-radio-4" class="py-[5px] px-[6px] md:px-[16px] text-center rounded-[30px] bg-[#F2F5F8] hover:bg-[#408FEF1A] text-[#3E3E3E] text-[12px] md:text-[14px] leading-[18px] md:leading-[21px] flex items-center mb-[10px] md:mb-[10px]">Category 2</label>
                            </div>
                        </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Notes</label>
                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0">
            </div>
            <div class="col-span-12 md:col-span-6">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">File</label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex items-center justify-center w-full montserrat font-semibold text-[14px] text-[#0D7AFF] leading-[17px] rounded-[10px] min-h-[49.2px] bg-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0">
                        <svg class="mr-[12px]" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.7308 18.5C1.26021 18.5 0.854102 18.3311 0.512461 17.9934C0.17082 17.6556 0 17.2542 0 16.7889V13.0954H1.36152V16.7889C1.36152 16.8802 1.39998 16.9639 1.4769 17.0399C1.55384 17.116 1.63848 17.154 1.7308 17.154H16.2692C16.3615 17.154 16.4462 17.116 16.5231 17.0399C16.6 16.9639 16.6385 16.8802 16.6385 16.7889V13.0954H18V16.7889C18 17.2542 17.8292 17.6556 17.4875 17.9934C17.1459 18.3311 16.7398 18.5 16.2692 18.5H1.7308ZM8.31924 14.0422V3.10755L5.00771 6.36989L4.02928 5.41402L9 0.5L13.9707 5.41402L12.9923 6.36989L9.68076 3.10755V14.0422H8.31924Z" fill="#0D7AFF"/>
                        </svg>
                        Upload
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> 
            </div>
        </div>

                <div class="text-right flex items-end justify-end mt-[41px]">
                    <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                </div>

    </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>