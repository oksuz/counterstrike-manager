#include <amxmodx>
#include <cstrike>
#include <engine>

new g_adminmarkEnt[33]
new cvar_enable
new MODEL_MARK[] 	= "models/degisecekalan.mdl"

static const PLUGIN_NAME[] 	= "Admin Pelerin"
static const PLUGIN_AUTHOR[] 	= "CounterStrike"
static const PLUGIN_VERSION[]	= "1.0"

public plugin_init()
{
	register_plugin(PLUGIN_NAME, PLUGIN_VERSION, PLUGIN_AUTHOR)
	register_cvar(PLUGIN_NAME, PLUGIN_VERSION, FCVAR_SPONLY|FCVAR_SERVER)	
	cvar_enable = register_cvar("admin_pelerin", "1")
}

public plugin_precache()
{
	precache_model(MODEL_MARK)	
	
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/gign/gign.mdl")
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/gsg9/gsg9.mdl")
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/sas/sas.mdl")
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/urban/urban.mdl")
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/vip/vip.mdl")

	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/arctic/arctic.mdl")
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/guerilla/guerilla.mdl")
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/leet/leet.mdl")
	force_unmodified(force_model_samebounds,{0,0,0},{0,0,0},"models/player/terror/terror.mdl")	
}

public client_connect(id)
{
	if(g_adminmarkEnt[id] > 0)
		remove_entity(g_adminmarkEnt[id])
	g_adminmarkEnt[id] = 0
}

public client_disconnect(id)
{
	if(g_adminmarkEnt[id] > 0)
		remove_entity(g_adminmarkEnt[id])
	g_adminmarkEnt[id] = 0
}

public client_PreThink(id)
{
	if(!is_user_connected(id))
		return PLUGIN_CONTINUE
	
	if(!is_user_alive(id) && g_adminmarkEnt[id] > 0)
	{
		remove_entity(g_adminmarkEnt[id])
		g_adminmarkEnt[id] = 0
		
		return PLUGIN_CONTINUE
	}
	
	if (!(get_user_flags(id) & ADMIN_KICK))
	{
		remove_entity(g_adminmarkEnt[id])
		g_adminmarkEnt[id] = 0
		
		return PLUGIN_CONTINUE
	}
	
	if(!get_pcvar_num(cvar_enable))
		return PLUGIN_CONTINUE
		
	if(!is_user_alive(id))
		return PLUGIN_CONTINUE
		
	if(g_adminmarkEnt[id] < 1)
	{
		g_adminmarkEnt[id] = create_entity("info_target")
		if(g_adminmarkEnt[id] > 0)
		{
			entity_set_int(g_adminmarkEnt[id], EV_INT_movetype, MOVETYPE_FOLLOW)
			entity_set_edict(g_adminmarkEnt[id], EV_ENT_aiment, id)
			entity_set_model(g_adminmarkEnt[id], MODEL_MARK)			
		}
	}
	
	if (g_adminmarkEnt[id] > 0)
	{
		new modelID = get_model_id(id)
		entity_set_int(g_adminmarkEnt[id], EV_INT_body, modelID)
	}

	if(g_adminmarkEnt[id] < 1)
		return PLUGIN_CONTINUE

	return PLUGIN_CONTINUE
}

new modelname[9][] ={
	"gign",
	"gsg9",
	"sas",
	"urban",
	"vip",
	"arctic",
	"guerilla",
	"leet",
	"terror"
}

public get_model_id(id)
{
	new modelStr[32], iNum=32, modelID
	get_user_info(id,"model",modelStr,iNum)
	
	for(new i = 0; i < 9; i++)
	{
		if (equali (modelStr, modelname[i]) )
		{
			modelID = i
		}
	}	
	return modelID
}
