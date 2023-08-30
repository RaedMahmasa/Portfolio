<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
        <div class="container mx-auto" key=""
        v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :visible="{
        opacity: 1,
        y: 0,
      }"
>
            <div class="flex flex-col xl:flex-row gap-24">
                 <img class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl" alt="About"
                 src="http://127.0.0.1:8000/img/about.jpeg">
                 <div class="flex flex-col items-center text-center lg:items-start lg:text-left">

                 <div class="flex flex-col">
                    <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                        About Me
                    </h2>
                    <P class="mb-4 text-accent"> Freelance frontend Web Developer</P>
                    <hr class="mb-8 opacity-90 dark:opacity-5" />
                    <p class="mb-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, numquam.
                        <br> <br> Animi, corporis mollitia.
                         Vitae, saepe! Excepturi a enim atque eaque cupiditate eveniet modi,
                         in esse ratione minima voluptatum obcaecati impedit.
                    </p>
                 </div>
                 <a href="#contact" class="btn btn-md bg-accent text-tail-100">
                    Contact Me
                 </a>
                </div>
            </div>
        </div>
    </section>
</template>
