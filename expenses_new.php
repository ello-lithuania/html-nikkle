<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px] md:px-[25%]">
            <div class="flex justify-between items-center mb-[26px] flex-wrap md:flex-nowrap">
                <h2 class="text-[24px] leading-[36px] text-[#003F6C] font-semibold">Add new expenses</h2>
                <a href="./purchases_expense.php" class="montserrat font-bold text-[12px] leading-[14.6px] text-[#0D7AFF]">Back</a>     
            </div>

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Expense amount*</label>
            <input class="mb-[20px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]">

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Tax%</label>
            <input type="number" class="mb-[20px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]">

            <div class="mb-[20px]">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Vendors</label>
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
         
            <div class="mb-[20px]">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Expense category*</label>
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

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Date</label>
                            <div>
                                <div class="relative mb-[20px]">
                                <div class="absolute inset-y-0 left-[12px] flex items-center pointer-events-none">
                                    <svg class="mr-[13px]" width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.60509 16.535C1.24094 16.535 0.925162 16.4013 0.657763 16.1339C0.390378 15.8665 0.256685 15.5507 0.256685 15.1866V3.00092C0.256685 2.63548 0.390378 2.31859 0.657763 2.05027C0.925162 1.78193 1.24094 1.64777 1.60509 1.64777H2.84896V0.460266H4.21587V1.64777H10.7841V0.460266H12.151V1.64777H13.3949C13.7604 1.64777 14.0772 1.78193 14.3456 2.05027C14.6139 2.31859 14.7481 2.63548 14.7481 3.00092V15.1866C14.7481 15.5507 14.6139 15.8665 14.3456 16.1339C14.0772 16.4013 13.7604 16.535 13.3949 16.535H1.60509ZM1.60509 15.1866H13.3949V6.71875H1.60509V15.1866ZM1.60509 5.53125H13.3949V3.00092H1.60509V5.53125ZM7.50049 10.1117C7.26829 10.1117 7.07348 10.0332 6.91607 9.87611C6.75864 9.71902 6.67993 9.52437 6.67993 9.29216C6.67993 9.05995 6.75847 8.86514 6.91555 8.70773C7.07264 8.55031 7.2673 8.4716 7.49951 8.4716C7.73171 8.4716 7.92652 8.55014 8.08393 8.70722C8.24136 8.86431 8.32007 9.05896 8.32007 9.29117C8.32007 9.52338 8.24153 9.71819 8.08445 9.8756C7.92735 10.033 7.7327 10.1117 7.50049 10.1117ZM4.33383 10.1117C4.10162 10.1117 3.90681 10.0332 3.7494 9.87611C3.59198 9.71902 3.51327 9.52437 3.51327 9.29216C3.51327 9.05995 3.59181 8.86514 3.74889 8.70773C3.90598 8.55031 4.10063 8.4716 4.33284 8.4716C4.56505 8.4716 4.75986 8.55014 4.91727 8.70722C5.07469 8.86431 5.1534 9.05896 5.1534 9.29117C5.1534 9.52338 5.07486 9.71819 4.91778 9.8756C4.76069 10.033 4.56604 10.1117 4.33383 10.1117ZM10.6672 10.1117C10.4394 10.1117 10.2457 10.0332 10.086 9.87611C9.92641 9.71902 9.8466 9.52437 9.8466 9.29216C9.8466 9.05995 9.92625 8.86514 10.0855 8.70773C10.2448 8.55031 10.4392 8.4716 10.6685 8.4716C10.8979 8.4716 11.0916 8.55014 11.2497 8.70722C11.4077 8.86431 11.4867 9.05896 11.4867 9.29117C11.4867 9.52338 11.4082 9.71819 11.2511 9.8756C11.094 10.033 10.8994 10.1117 10.6672 10.1117ZM7.50049 13.2784C7.26829 13.2784 7.07348 13.1988 6.91607 13.0395C6.75864 12.8802 6.67993 12.6858 6.67993 12.4565C6.67993 12.2271 6.75847 12.0334 6.91555 11.8753C7.07264 11.7173 7.2673 11.6383 7.49951 11.6383C7.73171 11.6383 7.92652 11.7168 8.08393 11.8739C8.24136 12.031 8.32007 12.2256 8.32007 12.4578C8.32007 12.6856 8.24153 12.8793 8.08445 13.039C7.92735 13.1986 7.7327 13.2784 7.50049 13.2784ZM4.33383 13.2784C4.10162 13.2784 3.90681 13.1988 3.7494 13.0395C3.59198 12.8802 3.51327 12.6858 3.51327 12.4565C3.51327 12.2271 3.59181 12.0334 3.74889 11.8753C3.90598 11.7173 4.10063 11.6383 4.33284 11.6383C4.56505 11.6383 4.75986 11.7168 4.91727 11.8739C5.07469 12.031 5.1534 12.2256 5.1534 12.4578C5.1534 12.6856 5.07486 12.8793 4.91778 13.039C4.76069 13.1986 4.56604 13.2784 4.33383 13.2784ZM10.6672 13.2784C10.4394 13.2784 10.2457 13.1988 10.086 13.0395C9.92641 12.8802 9.8466 12.6858 9.8466 12.4565C9.8466 12.2271 9.92625 12.0334 10.0855 11.8753C10.2448 11.7173 10.4392 11.6383 10.6685 11.6383C10.8979 11.6383 11.0916 11.7168 11.2497 11.8739C11.4077 12.031 11.4867 12.2256 11.4867 12.4578C11.4867 12.6856 11.4082 12.8793 11.2511 13.039C11.094 13.1986 10.8994 13.2784 10.6672 13.2784Z" fill="#0D7AFF"></path>
                                    </svg>
                                </div>
                                <input value="01/01/2018" type="text" name="daterange" class="input-datepicker-normal input-datepicker-right w-full rounded-[10px] min-h-[49.2px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 pl-[40px] text-[14px] leading-[17px]" placeholder="Select date">
                                </div>
                            </div>

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Notes</label>
            <input class="mb-[20px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]">

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Add picture of receipt or proof of expense document</label>
                <div class="flex items-center justify-center w-full mb-[40px]">
                    <label for="dropzone-file" class="flex items-center justify-center w-full montserrat font-semibold text-[14px] text-[#0D7AFF] leading-[17px] rounded-[10px] min-h-[49.2px] bg-[#E7F1FC] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0">
                        <span class="mr-[12px] plus-icon"></span>
                        Add File
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> 

                <div class="text-right flex items-end justify-end">
                    <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>