<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({symptoms: Object})

</script>

<template>
    <Head title="Gejala" />

    <AuthenticatedLayout>
        <template #header>
            <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2> -->
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <!-- table  -->
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                               No
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Kode Gejala
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Keterangan
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Permasalahan
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(symtom, i) in symptoms" key="i"
                                            class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                               {{ i + 1 }}
                                            </th>
                                            <td class="px-6 py-4">
                                               {{ symtom.symptom_code }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ symtom.description }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ symtom.problem.description }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <Link
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Detail
                                                </Link>
                                                <Link
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Edit
                                                </Link>
                                                <Link
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Hapus
                                                </Link>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <!-- end table -->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
