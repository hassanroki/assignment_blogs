 <footer class="bg-gray-100 py-16 mt-16">
     <div class="container mx-auto grid md:grid-cols-3 gap-8">
         <div>
             <h4 class="text-xl font-bold mb-3">The Journal</h4>
             <p class="text-gray-500 max-w-xs">A curated collection of stories, insights, and ideas. We believe in
                 the power of words to inspire, educate, and connect.</p>
         </div>
         <div>
             <h6 class="font-semibold mb-3">Categories</h6>
             <ul class="space-y-2 text-gray-500">
                 @foreach ($latestFourCategories as $latestFourCategory)
                     <li><a href="{{ route('category', $latestFourCategory->id) }}"
                             class="hover:text-blue-600">{{ $latestFourCategory->name }}</a></li>
                 @endforeach

             </ul>
         </div>
         <div>
             <h6 class="font-semibold mb-3">Connect</h6>
             <ul class="space-y-2 text-gray-500">
                 <li><a href="#" class="hover:text-blue-600">Twitter</a></li>
                 <li><a href="#" class="hover:text-blue-600">Instagram</a></li>
                 <li><a href="#" class="hover:text-blue-600">Newsletter</a></li>
             </ul>
         </div>
     </div>
     <div class="mt-8 border-t border-gray-300 pt-6 text-center text-gray-400 text-sm">
         © 2025 The Journal. All rights reserved.
     </div>
 </footer>
