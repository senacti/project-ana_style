from django.shortcuts import render

def index(request):
    return render(request, 'index.html')

def inicio_sesion(request):
    return render(request, 'login.html')

# Create your views here.
