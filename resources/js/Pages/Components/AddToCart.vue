<script>
import useProduct from "@/Pages/Composables/Products";

const { add } = useProduct();
const productId = defineProps(["productId"]);

const addToCart = async () => {
    await axios.get("/sanctum/csrf-cookie");
    await axios
        .get("/api/user")
        .then(async (res) => {
            await add(productId);
        })
        .catch((err) => console.log(err));
};
</script>

<template>
    <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
        <button
            tabindex="0"
            class="focus:outline-none text-xs text-yellow-700"
            v-on:click.prevent="addToCart"
        >
            Ajouter au panier
        </button>
    </div>
</template>
