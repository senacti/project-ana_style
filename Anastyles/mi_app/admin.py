from django.contrib import admin
from .models import Category, Product

# Register your models here.
admin.site.register(Category)
admin.site.register(Product)
class ProductAdmin(admin.ModelAdmin):
    list_display = ('name', 'price', 'stock')
    list_display_links = ('name',)
    list_editable = ('price', 'stock')
    search_fields = ('name',)
