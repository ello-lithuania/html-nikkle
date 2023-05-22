<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold mb-[28px] ml-[16px] md:ml-0 mt-[1rem]">Run payroll</h2> 

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

            <div class="grid grid-cols-12 gap-[30px] md:gap-[15px]">
                <div class="col-span-12 md:col-span-6">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] mb-[10px]">PAYROLL PERIOD</p>
                            <div>
                                <div class="relative md:max-w-sm">
                                <div class="absolute inset-y-0 left-[12px] flex items-center pointer-events-none">
                                    <svg class="mr-[13px]" width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.60509 16.535C1.24094 16.535 0.925162 16.4013 0.657763 16.1339C0.390378 15.8665 0.256685 15.5507 0.256685 15.1866V3.00092C0.256685 2.63548 0.390378 2.31859 0.657763 2.05027C0.925162 1.78193 1.24094 1.64777 1.60509 1.64777H2.84896V0.460266H4.21587V1.64777H10.7841V0.460266H12.151V1.64777H13.3949C13.7604 1.64777 14.0772 1.78193 14.3456 2.05027C14.6139 2.31859 14.7481 2.63548 14.7481 3.00092V15.1866C14.7481 15.5507 14.6139 15.8665 14.3456 16.1339C14.0772 16.4013 13.7604 16.535 13.3949 16.535H1.60509ZM1.60509 15.1866H13.3949V6.71875H1.60509V15.1866ZM1.60509 5.53125H13.3949V3.00092H1.60509V5.53125ZM7.50049 10.1117C7.26829 10.1117 7.07348 10.0332 6.91607 9.87611C6.75864 9.71902 6.67993 9.52437 6.67993 9.29216C6.67993 9.05995 6.75847 8.86514 6.91555 8.70773C7.07264 8.55031 7.2673 8.4716 7.49951 8.4716C7.73171 8.4716 7.92652 8.55014 8.08393 8.70722C8.24136 8.86431 8.32007 9.05896 8.32007 9.29117C8.32007 9.52338 8.24153 9.71819 8.08445 9.8756C7.92735 10.033 7.7327 10.1117 7.50049 10.1117ZM4.33383 10.1117C4.10162 10.1117 3.90681 10.0332 3.7494 9.87611C3.59198 9.71902 3.51327 9.52437 3.51327 9.29216C3.51327 9.05995 3.59181 8.86514 3.74889 8.70773C3.90598 8.55031 4.10063 8.4716 4.33284 8.4716C4.56505 8.4716 4.75986 8.55014 4.91727 8.70722C5.07469 8.86431 5.1534 9.05896 5.1534 9.29117C5.1534 9.52338 5.07486 9.71819 4.91778 9.8756C4.76069 10.033 4.56604 10.1117 4.33383 10.1117ZM10.6672 10.1117C10.4394 10.1117 10.2457 10.0332 10.086 9.87611C9.92641 9.71902 9.8466 9.52437 9.8466 9.29216C9.8466 9.05995 9.92625 8.86514 10.0855 8.70773C10.2448 8.55031 10.4392 8.4716 10.6685 8.4716C10.8979 8.4716 11.0916 8.55014 11.2497 8.70722C11.4077 8.86431 11.4867 9.05896 11.4867 9.29117C11.4867 9.52338 11.4082 9.71819 11.2511 9.8756C11.094 10.033 10.8994 10.1117 10.6672 10.1117ZM7.50049 13.2784C7.26829 13.2784 7.07348 13.1988 6.91607 13.0395C6.75864 12.8802 6.67993 12.6858 6.67993 12.4565C6.67993 12.2271 6.75847 12.0334 6.91555 11.8753C7.07264 11.7173 7.2673 11.6383 7.49951 11.6383C7.73171 11.6383 7.92652 11.7168 8.08393 11.8739C8.24136 12.031 8.32007 12.2256 8.32007 12.4578C8.32007 12.6856 8.24153 12.8793 8.08445 13.039C7.92735 13.1986 7.7327 13.2784 7.50049 13.2784ZM4.33383 13.2784C4.10162 13.2784 3.90681 13.1988 3.7494 13.0395C3.59198 12.8802 3.51327 12.6858 3.51327 12.4565C3.51327 12.2271 3.59181 12.0334 3.74889 11.8753C3.90598 11.7173 4.10063 11.6383 4.33284 11.6383C4.56505 11.6383 4.75986 11.7168 4.91727 11.8739C5.07469 12.031 5.1534 12.2256 5.1534 12.4578C5.1534 12.6856 5.07486 12.8793 4.91778 13.039C4.76069 13.1986 4.56604 13.2784 4.33383 13.2784ZM10.6672 13.2784C10.4394 13.2784 10.2457 13.1988 10.086 13.0395C9.92641 12.8802 9.8466 12.6858 9.8466 12.4565C9.8466 12.2271 9.92625 12.0334 10.0855 11.8753C10.2448 11.7173 10.4392 11.6383 10.6685 11.6383C10.8979 11.6383 11.0916 11.7168 11.2497 11.8739C11.4077 12.031 11.4867 12.2256 11.4867 12.4578C11.4867 12.6856 11.4082 12.8793 11.2511 13.039C11.094 13.1986 10.8994 13.2784 10.6672 13.2784Z" fill="#0D7AFF"/>
                                    </svg>
                                </div>
                                <input value="01/01/2018 - 01/08/2018" type="text" name="daterange" class="input-datepicker input-datepicker-right text-[14px] md:text-[18px] leading-[18px] md:leading-[28px] bg-transparent outline-0 border border-[#D9D9D9] rounded-[10px] inline-block py-[7px] px-[13px] pl-[40px]" placeholder="Select date">
                                </div>
                            </div>
                
                </div>
                <div class="col-span-12 md:col-span-6 text-right flex items-end justify-end">
                    <button class="bg-[#003F6C] w-full md:w-auto hover:bg-[#002743] box-shadow text-white rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Run Payroll</button>
                </div>
            </div>

            <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

            <div class="flex flex-wrap md:no-wrap justify-between items-center mb-[23px]">
                            <form class="bg-white py-[11px] px-[17px] flex items-center overflow-hidden rounded-[10px] md:min-w-[268px] w-full md:w-auto mb-[30px] md:mb-0">
                                <input placeholder="Search..." class="placeholder:text-[#A9AFB5] color-black text-[16px] leading-[24px] outline-0 flex-grow pr-[10px]"/>
                                <button><img src="./img/icon-search-blue.svg"/></button>
                            </form>
                            <div class="flex justify-end w-full md:w-auto">
                                <button><img src="./img/icon-filter.svg"/></button>
                                <button class="ml-[25px] mr-[5px]"><img src="./img/icon-download.svg"/></button>
                            </div>    
            </div>

            <div class="grid grid-cols-6 gap-[15px] items-center py-[14px] pl-[17px] hidden md:grid bg-silver-light rounded-[10px]">
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Name</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">position</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">base salary</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">gross pay</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">tax</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">nett pay</p>
                </div>
            </div>

            <div class="grid grid-cols-12 md:grid-cols-12 md:gap-[15px] items-center py-[20px] md:py-[17px] md:pl-[17px]">
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold mb-[7px] md:mb-0">Abhinav Test</p>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[12px] md:text-[14px] leading-[18px] md:leading-[21px] mb-[20px] md:m-0">Position</p>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">base salary</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">gross pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">Tax</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">nett pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-12 md:gap-[15px] items-center py-[20px] md:py-[17px] md:pl-[17px]">
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold mb-[7px] md:mb-0">Abhinav Test</p>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[12px] md:text-[14px] leading-[18px] md:leading-[21px] mb-[20px] md:m-0">Position</p>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">base salary</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">gross pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">Tax</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">nett pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-12 md:gap-[15px] items-center py-[20px] md:py-[17px] md:pl-[17px]">
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold mb-[7px] md:mb-0">Abhinav Test</p>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[12px] md:text-[14px] leading-[18px] md:leading-[21px] mb-[20px] md:m-0">Position</p>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">base salary</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">gross pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">Tax</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">nett pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-12 md:gap-[15px] items-center py-[20px] md:py-[17px] md:pl-[17px]">
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold mb-[7px] md:mb-0">Abhinav Test</p>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[12px] md:text-[14px] leading-[18px] md:leading-[21px] mb-[20px] md:m-0">Position</p>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">base salary</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">gross pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">Tax</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">nett pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-12 md:gap-[15px] items-center py-[20px] md:py-[17px] md:pl-[17px]">
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold mb-[7px] md:mb-0">Abhinav Test</p>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <p class="text-[#3E3E3E] text-[12px] md:text-[14px] leading-[18px] md:leading-[21px] mb-[20px] md:m-0">Position</p>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">base salary</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">gross pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">Tax</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
                <div class="col-span-3 md:col-span-2">
                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mb-[9px] md:hidden">nett pay</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$ <span class="md:font-semibold">0.00</span></p>
                </div>
            </div>

            <div class="flex justify-between mt-[20px]">
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