<div class="px py bg-gradient-to-b from-secondary-800/20  to-purple-700/20">
    <div class="w-20 h-1 bg-pink-500 shadow shadow-pink-500 rounded mb-10 mt-10"></div>
    <div class="title mb-10">
        Become a Reseller of <span class="text-violet-500">Cryptus.io</span>
    </div>
    <div class="mb-10 text-neutral-300/80 max-w-xl text-lg">
        Sed fuga possimus aut ullam corrupti rem perferendis velit quo blanditiis
        libero ab dolores obcaecati sed quae eveniet qui labore dolorem?
    </div>
    <form action="#!" class="outline outline-offset-2 outline-2 outline-transparent w-full md:w-[30rem] bg-white/60 shadow shadow-purple-300/40 flex rounded-lg overflow-hidden duration-500 mb-10">
        <input type="text" placeholder="Enter your email address to get more details"
            class="w-full pl-6 py-3 bg-transparent text-neutral-800 placeholder-neutral-600 outline-none">
        <button class="px-6">
            <?php require(BASE . "/partials/icons/arrow-right.php") ?>
        </button>
    </form>
</div>

<div id="modal" hideable class="lunar-hidden bg-black/20 backdrop-blur p-1 flex items-center justify-center fixed top-0 right-0 left-0 bottom-0 z-50">
    <div class="rounded-xl shadow-lg bg-neutral-300/10 px-5 md:px-10 py-12 max-w-xl">
        <div class="title text-center mb-8">Thanks for Sending!</div>
        <div class="text-center text-neutral-400 mb-10">
            Est aliquam corrupti et dolorem sint ea reprehenderit laborum. Est maxime
            sint in sunt architecto sed dignissimos magni
        </div>
        <div class="flex justify-center text-secondary-200/80">
            <span data-toggle="#modal" class="cursor-pointer">
                <?php require(BASE . '/partials/icons/close.php') ?>
            </span>
        </div>
    </div>
</div>