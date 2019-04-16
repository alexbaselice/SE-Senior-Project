from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse


def webapp(request):
    return HttpResponse("Whattup mothasucka. You've reached the webapp view.")