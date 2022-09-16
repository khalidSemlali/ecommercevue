<script>
import AppLayout from "@/Layouts/AppLayout.vue";
export default {
    components: {
        AppLayout,
    },
    props: {
        products: {},
    },
};
</script>

<style></style>

<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Produits
            </h2>
        </template>

        <div class="mx-auto container py-8">
            <div
                class="flex flex-wrap items-center lg:justify-between justify-center"
            >
                <div
                    v-for="product in products"
                    v-bind:key="product.id"
                    class="home"
                >
                    <div
                        tabindex="0"
                        class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8"
                    >
                        <div>
                            <img
                                alt="person capturing an image"
                                :src="product.image"
                                tabindex="0"
                                class="focus:outline-none w-full h-44"
                            />
                        </div>
                        <div class="bg-white">
                            <div
                                class="flex items-center justify-between px-4 pt-4"
                            >
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        tabindex="0"
                                        class="focus:outline-none"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="#2c3e50"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        ></path>
                                        <path
                                            d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2
                                        tabindex="0"
                                        class="focus:outline-none text-lg font-semibold"
                                    >
                                        {{ product.name }}
                                    </h2>
                                    <p
                                        tabindex="0"
                                        class="focus:outline-none text-xs text-gray-600 pl-5"
                                    >
                                        {{ product.created }}
                                    </p>
                                </div>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xs text-gray-600 mt-2"
                                >
                                    {{ product.description }}
                                </p>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xs text-gray-600 mt-2"
                                >
                                    {{ product.formatted_price }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>
